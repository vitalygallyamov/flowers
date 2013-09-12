<?

class CatalogPager extends CLinkPager
{
    public $cssFile = false;
    public $header = '';
    public $firstPageLabel = '';
    public $prevPageLabel = '';
    public $nextPageLabel = '';
    public $lastPageLabel = '';
    public $selectedPageCssClass = 'active';

    public function run()
	{
	    $this->registerClientScript();
	    $buttons=$this->createPageButtons();
	    if(empty($buttons))
	        return;
	    echo $this->header;

	    //add last link
	    //$buttons[] = '<li><a class="show-all" href="'.$this->createPageUrl(0).'">Показать все</a></li>';
	    $buttons[0] = '<li>Страницы:</li>';
	    //print_r($buttons);
	    echo CHtml::tag('ul',$this->htmlOptions,implode("\n",$buttons));
	    echo $this->footer;
	}
}