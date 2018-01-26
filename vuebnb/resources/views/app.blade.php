<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Vuebnb</title>
  <link rel="stylesheet" href="node_modules/open-sans-all/css/open-sans.css">
  <script src="sample/data.js"></script>
  <!-- <link rel="stylesheet" href="node_modules/open-sans-all/css/opensans.css">
 <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">-->
  <link rel="stylesheet" href="{{ asset ('css/style.css') }}" type="text/css">
</head>
<body>
<div id="toolbars">
  <img class="iconss" src="{{ asset('images/logo.png') }}">
  <h1>vuebnb</h1>
</div>

<div id="app">
  <div class="header2">
  	<div class="header-img" v-bind:style="headerImageStyle" v-on:click="modalOpen = true">
  	</div>
  </div>

  <div id="modal" v-bind:class="{ show : modalOpen }">
  	<button v-on:click="modalOpen = false" class="modal-close">&times;</button>
  	<div class="modal-content">
  			<img src="{{ asset ('images/header.jpg') }}">
  	</div>
  </div>
</div>
<script src="node_modules/vue/dist/vue.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>



