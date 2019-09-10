<?php

namespace rs\shariff\Core;

class ViewConfig extends ViewConfig_parent
{

    /**
     * @param string $sArea : detail_page, footer
     *
     * @return string
     */
    public function getShariffButton($sArea)
    {
        $sRet="";
        if((bool) $this->getConfig()->getConfigParam("rs-shariff_{$sArea}_display"))
        {
            $sParam=[];

            if($sArea=="footer")
            {
                $sParam['data-url']=$this->getHomeLink();
            }

            $oLang = \OxidEsales\Eshop\Core\Registry::getLang();
            $sParam['data-lang']=$oLang->getLanguageAbbr();

            $sParam['data-info-url']=$this->getConfig()->getConfigParam("rs-shariff_main_data-info-url");
            $sParam['data-info-display']=$this->getConfig()->getConfigParam("rs-shariff_main_data-info-display");

            $aServices = explode("|",$this->getConfig()->getConfigParam("rs-shariff_main_data-services"));
            $aServices = array_map('trim',$aServices);
            $aServices = array_map('strtolower', $aServices);
            $aServices = array_filter($aServices);

            $hasMail=false;
            if(in_array('mail',$aServices))
            {
                if(trim($this->getConfig()->getConfigParam("rs-shariff_main_data-mail-url"))!="")
                {
                    $hasMail=true;
                    $sParam['data-mail-body']=$this->getConfig()->getConfigParam("rs-shariff_main_data-mail-body");
                    $sParam['data-mail-subject']=$this->getConfig()->getConfigParam("rs-shariff_main_data-mail-subject");
                    $sParam['data-mail-url']='mailto:'.trim($this->getConfig()->getConfigParam("rs-shariff_main_data-mail-url"));
                }
            }
            if($hasMail==false)
            {
                $aTmp=[];
                foreach($aServices as $sService)
                {
                    if($sService!="mail")
                        $aTmp[]=$sService;
                }
                $aServices = $aTmp;
            }

            $sParam['data-services']="[&quot;".implode('&quot;,&quot;',$aServices)."&quot;]";

            $sParam['data-button-style']=$this->getConfig()->getConfigParam("rs-shariff_{$sArea}_data-button-style");
            $sParam['data-orientation']=$this->getConfig()->getConfigParam("rs-shariff_{$sArea}_data-orientation");
            $sParam['data-theme']=$this->getConfig()->getConfigParam("rs-shariff_{$sArea}_data-theme");

            $sRet = '<div class="shariff" ';
            foreach($sParam as $sKey => $sValue)
            {
                $sRet.=$sKey.'="'.str_replace('"','&quot;',trim($sValue)).'" ';
            }
            $sRet.= '></div>';
        }
        return $sRet;
    }

}