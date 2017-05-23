<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="salesforce-community" content="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>">
    <meta name="salesforce-client-id" content="3MVG9Iu66FKeHhIPrRneLTDFdiuLfgLjycFpg6SbLpZAJScEXuD.oRdaWnJE7QGNFWHxunp0ut1">
  	<meta name="salesforce-mode" content="modal-callback">
  	<meta name="salesforce-save-access-token" content="true">
  	<!--<meta name="salesforce-allowed-domains" content="*.herokuapp.com">-->
    <meta name="salesforce-allowed-domains" content="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>">
    <meta name="salesforce-redirect-uri" content="https://<?php echo getenv('HEROKUAPP_URL_HERE');?>/_callback.html">
    <meta name="salesforce-target" content="#salesforce-login">
    <meta name="salesforce-login-handler" content="onLogin">
    <meta name="salesforce-logout-handler" content="onLogout">
  	<script src="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>/servlet/servlet.loginwidgetcontroller?type=javascipt_widget" async defer></script>
  </head>
  <body></body>
</html>
