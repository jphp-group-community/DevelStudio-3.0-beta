<?
class TSizeCtrlEx extends __TNoVisual {
    
    
        
    public function __construct($onwer=nil,$init=true,$self=nil){
        parent::__construct($onwer, $init, $self);
             
        if ($init)
        {
            $this->gridSize = 8;
            $this->showGrid = True;
			$this->btnColor = clBlue;
            $this->btnColorDisabled = clGray;
        }
    }
    
    public function __initComponentInfo(){
        
        parent::__initComponentInfo();
        
        $_sc = new TSizeCtrl($this->parent);
        $_sc->MoveOnly   = $this->MoveOnly;
        $_sc->BtnColor   = $this->BtnColor;
        $_sc->BtnColorDisabled   = $this->BtnColorDisabled;
        $_sc->gridSize   = $this->gridSize;
        $_sc->MultiTargetResize   = $this->MultiTargetResize;
        $_sc->showGrid   = $this->showGrid;
        $_sc->enable   = $this->enable;
        
        $tmp = $this->name;
        $this->name = '';
        $_sc->name = $tmp;
        eventEngine::updateIndex($_sc);
    }
}
?>