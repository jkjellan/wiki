function showInput()
      {
      var text1_entered =  document.getElementById("username").value;
      var text2_entered = document.getElementById("name").value;
      
      document.getElementById('display').innerHTML = text1_entered + " " + text2_entered;
      
      
      }