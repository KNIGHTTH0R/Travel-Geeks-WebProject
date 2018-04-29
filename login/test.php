<!doctype html>
<html>

<style>
 div {
   background-color: #bca;
   width: 100px;
   border: 1px solid green;
 }
 </style>
 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

 <div id="block">Welcome!</div>

 <script>
 // Using multiple unit types within one animation.

 $( "#block" ).click(function() {
   $( "#block" ).animate({
     width: "70%",
     opacity: 0.4,
     marginLeft: "0.6in",
     fontSize: "3em",
     borderWidth: "10px"
   }, 1500 );
 });
 </script>
</html>
