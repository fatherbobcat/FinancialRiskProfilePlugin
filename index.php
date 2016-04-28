<!DOCTYPE html>
<html lang="en-US">

<!--Title and Header------------------------------------------------------------------------------------------------------------------------------------------>
<title> Example App </title>
<head>
<script src="scripts/justgageplugin.js" type="text/javascript"></script>
<script src="scripts/justgage.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>

<!-- Graphs Section---------------------------------------------------------------------------------------------------------------->
<div id= "graph"> 

<h2>Risk Capacity</h2>

<!-- Risk Capacity Section -------------------------------------------------------------------------------------->
<div class="panel">

<!-- LCR Original --------------------------------------------------------------------->
<div align="center" class="gauge">
<div id="LCR" class="gaugeinner"></div>
</div>

<!-- T1C Original --------------------------------------------------------------------->
<DIV align="center" class="gauge">
<div id="T1C" class="gaugeinner"></div>
</div>

<!-- SLR Original --------------------------------------------------------------------->
<DIV align="center" class="gauge">
<div id="SLR" class="gaugeinner"></div>
</div>

<!-- Scenario Graphs (only populated when scenario is selected) --------------------------------------->
<div id="scenarioRC" class="gaugehidden">

<!-- LCR Scenario --------------------------------------------------------------------->
<DIV align="center" class="gauge">
<div id="LCR_Scenario" class="gaugeinner"></div>
</div>

<!-- T1C Scenario --------------------------------------------------------------------->
<DIV align="center" class="gauge">
<div id="T1C_Scenario" class="gaugeinner"></div>
</div>

<!-- SLR Scenario --------------------------------------------------------------------->
<DIV align="center" class="gauge">
<div id="SLR_Scenario" class="gaugeinner"></div>
</div>

</div>
</div>

<!-- Profitability Block -------------------------------------------------------------------------------------->
<div class="panel">
<h2>Profitability</h2>

<!-- ROE Original --------------------------------------------------------------------->
<DIV align="center" class="gauge1">
<div id="ROE" class="gaugeinner"></div>
</div>

<!-- ROA Original --------------------------------------------------------------------->
<DIV align="center" class="gauge1">
<div id="ROA" class="gaugeinner"></div>
</div>

<!-- Scenario Graphs (only populated when scenario is selected) --------------------------------------->
<div id="scenarioP" class="gaugehidden">
	
<!-- ROE Scenario --------------------------------------------------------------------->
<DIV align="center" class="gauge1">
<div id="ROE_Scenario" class="gaugeinner"></div>
</div>

<!-- ROA Scenario --------------------------------------------------------------------->
<DIV align="center" class="gauge1">
<div id="ROA_Scenario" class="gaugeinner"></div>
</div>

</div>
</div>
</div>


<!-- Scenario Block---------------------------------------------------------------------------------------------------------------->

<div id="scenario">
<!-- Scenario 1 ----------------------------------------------------------------------------------------->
<h2 class="header1">Scenarios </h2>
<div id="scenariowrapper">

<!-- Investment Portfolio --------------------------------------------------------------->
<p class="selectionsteps">
<span class="steplink" onclick="expandOption('soInvest')">&nbsp; Click to Expand/Collapse</span>&nbsp; <strong>Scenario 1 -</strong> Investment Portfolio Rebalancing
</p>
<div class = "selectionoption" id="soInvest">
<blockquote>
<p>Option 1 - Sell Treasuries and purchase Agency Bonds with proceeds</p>
<ul>
<li>Choice 1 - "$50mm"</li> 
<li>Choice 2 - "$100mm"</li>
</ul>
<p>Option 2 - Sell Agencies and Invest proceeds at Fed</p>
<ul>
<li>Choice 1 </li>
<li>Choice 2 </li>
</ul>
</blockquote>
</div>

<!-- Long Term Debt -------------------------------------------------------------------->
<p class = "selectionsteps">
<span class="steplink" onclick="expandOption('soLTD')">&nbsp; Click to Expand/Collapse</span>&nbsp; <strong>Scenario 2 -</strong> &nbsp; Long Term Debt
</p>
<div class = "selectionoption" id="soLTD">
<blockquote>
<p>Option 1 - Sell Treasuries and purchase Agency Bonds with proceeds </p>
<ul>
<li>Choice 1 - "$50mm"</li> 
<li>Choice 2 - "$100mm" </li>
</ul>
<p>Option 2 - Sell Agencies and Invest proceeds at Fed </p>
<ul>
<li>Choice 1 </li>
<li>Choice 2 </li>
</ul>
</blockquote>
</div>

<!-- Equity --------------------------------------------------------------------------->
<p class= "selectionsteps">
<span class="steplink" onclick="expandOption('soE')">&nbsp; Click to Expand/Collapse </span>&nbsp; <strong>Scenario 3 -</strong>&nbsp; Equity
</p>
<div class = "selectionoption" id="soE">
<blockquote>
<p>Option 1 - Sell Treasuries and purchase Agency Bonds with proceeds </p>
<ul>
<li>Choice 1 - "$50mm"</li> 
<li>Choice 2 - "$100mm" </li>
</ul>
<p>Option 2 - Sell Agencies and Invest proceeds at Fed </p>
<ul>
<li>Choice 1 </li>
<li>Choice 2 </li>
</ul>
</blockquote>
</div>

<!-- Balance Sheet Growth ------------------------------------------------------------->
<p class="selectionsteps">
<span class="steplink" onclick="expandOption('soBSG')">&nbsp; Click to Expand/Collapse</span> &nbsp; <strong>Scenario 4 -</strong>&nbsp; Balance Sheet Growth
</p>
<div class="selectionoption" id="soBSG">
<blockquote>
<p>Option 1 - Sell Treasuries and purchase Agency Bonds with proceeds </p>
<ul>
<li>Choice 1 - "$50mm" </li>
<li>Choice 2 - "$100mm" </li>
</ul>
<p>Option 2 - Sell Agencies and Invest proceeds at Fed </p>
<ul>
<li>Choice 1 </li>
<li>Choice 2 </li>
</ul>
</blockquote>
</div>

<h2 class="header1">Scenario Details</h2>
</div>

</body>
</html>