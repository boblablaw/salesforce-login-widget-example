<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="salesforce-community" content="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>">
    <!--<meta name="salesforce-allowed-domains" content="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>">-->
    <meta name="salesforce-client-id" content="<?php echo getenv('SALESFORCE_CLIENT_ID');?>">
    <meta name="salesforce-redirect-uri" content="https://<?php echo getenv('SALESFORCE_HEROKUAPP_URL');?>/_callback.php">
    <meta name="salesforce-mode" content="inline-callback">
  	<meta name="salesforce-save-access-token" content="true">
  	<meta name="salesforce-allowed-domains" content="*.herokuapp.com">
  	<script src="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>/servlet/servlet.loginwidgetcontroller?type=javascipt_widget" async defer></script>
    <meta name="salesforce-target" content="#salesforce-login">
    <meta name="salesforce-login-handler" content="onLogin">
    <meta name="salesforce-logout-handler" content="onLogout">
    <script src="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>/servlet/servlet.loginwidgetcontroller?type=javascript_widget" async defer></script>
    <script
    src="https://embeddedlogin-developer-edition.na99.force.com/demo/servlet/servlet.loginwidgetcontroller?type=javascipt_widget"
    async defer></script>
  </head>
  <body></body>
</html>
