<?php

class Page
{
    protected function _renderHeader(){
        echo '<div class="header">
					HEADEr
			  </div><br>';
	}
    protected function _renderFooter(){
        echo '<div class="footer">FOOTEr</div>';
    }
    protected function _renderContent() {
        echo $this->getContent();
    }

    public function render(){
        $this->_renderHeader();
        $this->_renderContent();
        $this->_renderFooter();
    }

}
?>