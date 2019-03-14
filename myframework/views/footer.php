</div>
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>
  <script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
$("[data-toggle=popover]").popover();
var send = function(){
  if($("#usernameInput").val() != "" &&
   $("#passwordInput").val() != "" &&
   $("#bioTextArea").val() != "" &&
   $("#inputAge").val() != "" &&
   $("#checkTerms").val() != ""
   ){
     var username = $("#usernameInput").val();
     var password = $("#passwordInput").val();
     var bio = $("#bioTextArea").val();
     var age = $("#inputAge").val();
     var gender = $('input[name=gender]:checked').val();
     var terms = $("#checkTerms").val();

     $.ajax({
        method: "post",
        url: "/form/ajaxparse",
        success:function(data){
          if(data == "good"){
            window.document.location.href="/welcome";
          }
        },
        data: {
          "username":username,
          "password": password,
          "bio": bio,
          "age": age,
          "gender": gender,
          "terms": terms
        }

     });
   }else{
     alert("Invalid Username / Password");
   }
}
</script>
</body>
</html>