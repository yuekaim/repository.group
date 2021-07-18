<#
This template uses includes for elements that might be used also in other templates
such as the header, navbar and footer markup.
#>
<@ elements/header.php @>

	<iframe id="doc" src="https://docs.google.com/document/d/11uObCNwmIf_dJ7T7UIojVbEZkyHDk00MxSb8ibjVYV8/edit?usp=sharing"></iframe>


  <@ foreach in pagelist @>
		<div class="@{ class } popup">
			@{ +main }
		</div>
	<@ end @>

	<div class="menu">
		<@ foreach in pagelist @>
			<div class="menu-item" id="@{ class }-menu">
				@{ title }
			</div>
		<@ end @>
	</div>


	<div id="clicklayer"></div>
	<div id="shadow"></div>

<@ elements/footer.php @>
