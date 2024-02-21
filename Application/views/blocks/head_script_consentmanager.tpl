[{$smarty.block.parent}]
[{assign var="oConfig" value=$oViewConf->getConfig()}]
<!-- Consentmanager -->
[{$oConfig->getConfigParam('kussin_consent_script')}]
<!-- End Consentmanager -->