<?php
class Paginator{
	public $rowsTotal;//获取总页数；
	public $pagesize;
	public $curPage;
	public $pageTotal;
	public $linkPage;
	 
	function initPage(){
		if($this->curPage==""||$this->curPage<1){
			$this->curPage=1;
		}
		if(!is_numeric($this->curPage)){
			$this->curPage=1;
		}
		if ($this->curPage>$this->getPageTotal()){
			$this->curPage=$this->getPageTotal();
		}
		$this->curPage=intval($this->curPage);
	}
	
	public function getPageTotal(){
		$pageTotal = ceil($this->rowsTotal/$this->pagesize);
		return $pageTotal;
	}	
}
class Page1 extends Paginator {
	function showPage(){
		$this->initPage();
		$this->pageTotal=$this -> getPageTotal();
		if($this->pageTotal == 1){
		$str.="最前页&nbsp;上一页&nbsp;下一页&nbsp;最后页";
	} else {
	   if($this -> curPage == 1) {
			$str .= "最前页&nbsp;上一页&nbsp;";
			$str .= "<a href=\"{$this -> linkPage}?p=".($this -> curPage+1)."\">下一页</a>&nbsp;";
			$str .= "<a href=\"{$this -> linkPage}?p={$this -> pageTotal}\">最后页</a>";
			
		}
		
		if($this -> curPage == $this -> pageTotal){
			$str .= "<a href=\"{$this -> linkPage}?p=1\">最前页</a>&nbsp;";
			$str .= "<a href=\"{$this -> linkPage}?p=".($this -> curPage-1)."\">上一页</a>&nbsp;";
			$str .= "下一页&nbsp;最后页";
			
		}
		
		if($this -> curPage > 1 && $this -> curPage < $this -> pageTotal) {
			$str .= "<a href=\"{$this -> linkPage}?p=1\">最前页</a>&nbsp;";
			$str .= "<a href=\"{$this -> linkPage}?p=".($this -> curPage-1)."\">上一页</a>&nbsp;";
			$str .= "<a href=\"{$this -> linkPage}?p=".($this -> curPage+1)."\">下一页</a>&nbsp;";
			$str .= "<a href=\"{$this -> linkPage}?p={$this -> pageTotal}\">最后页</a>";			
		}
		
	}
				return $str;
	}
}

//上一页、下一页、文本框
class Page2 extends Page1{
	function showPage(){
		$pages  = parent::showPage();
		$pages .= "&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" onkeypress=\"if(event.keyCode==13) location.href='{$this -> linkPage}?p=' + this.value \"/>";
		return $pages;
	}	
	
}


//列表框形式

class Page3 extends Page1 {
	
	function showPage(){
	 $str  = parent::showPage();
		$this -> pageTotal = $this -> getPageTotal();
	
		$str .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select onchange=\"location.href='{$this -> linkPage}?p=' + this.value\">";
		
		for($i=1;$i<=$this -> pageTotal;$i++) {
			
			if($i == $this -> curPage){
				$s = "selected=\"selected\"";
			} else {
				$s = null;
			}
			
		
		$str .= "<option value=\"{$i}\"". $s .">第{$i}页</option>\n";

		}
	
		$str .= "</select>";	
	
	    return $str;
	}
	
}

class Page4 extends Paginator {
 	function showPage(){
		$this->initPage();
		$this->pageTotal=$this -> getPageTotal();
	    $str.="<div id='page_div'>";
	 for($i=1;$i<=$this->pageTotal;$i++){
		 if($i==$this->curPage){
			 $img="page2.png";
		 }else{
			$img="page.png"; 
		 }
		 $str.=" <span id=\"page_s1\"><a href=\"{$this -> linkPage}?p={$i}\"><img border=\"0\"src=\"images/{$img}\"></a></span>";
	 }
	 $str.="</div>";
	 return $str;
  }

}






?>