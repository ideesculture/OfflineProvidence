<?php
 	$po_request 			= $this->getVar('request');
	$va_instances 			= $this->getVar('instances');
	$va_settings 			= $this->getVar('settings');
	$vs_widget_id 			= $this->getVar('widget_id');
?>

<div class="dashboardWidgetContentContainer" style="font-size:13px; padding-right:10px;">
	<div id="onlineW">🟢 en ligne</div>
	<div id="offlineW" style="display:none;">
		<p>🔴 Vous êtes en mode hors connexion.</p>
		<p><button>Saisie hors connexion</button></p>
	</div>
	<script>
		window.onoffline = function() {
    	$("#onlineW").hide();
			$("#offlineW").show();
		}
		window.ononline = function() {
    	$("#onlineW").show();
			$("#offlineW").hide();
		}
	</script>
</div>