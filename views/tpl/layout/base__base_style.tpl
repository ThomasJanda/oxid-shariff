[{assign var="oConfig" value=$oViewConf->getConfig()}]
[{assign var="bWithFontAwesome" value=$oConfig->getConfigParam('rs-shariff_with_font_awesome')}]
[{if $bWithFontAwesome=="1"}]
    [{oxstyle include=$oViewConf->getModuleUrl("rs-shariff", "out/src/shariff/shariff.complete.css")}]
[{else}]
    [{oxstyle include=$oViewConf->getModuleUrl("rs-shariff", "out/src/shariff/shariff.min.css")}]
[{/if}]
