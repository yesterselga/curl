<style>
     body {
          background: #000;
     }

     * {
          color: #fff;

     }

     #result {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          padding: 10px;
     }

     h1 {
          font-size: 120px;
     }
</style>

<div id="result">
     <h1 id="votes">0</h1>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
     function numberWithCommas(x) {
          return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
     }

     function vote() {
          $.get("vote.php", function(data, status) {

               try {
                    var d = JSON.parse(data);
                    var v = d.data.fragments;

                    var x = JSON.stringify(v);
                    if (x.includes(":")) {
                         const r = x.split(":");
                         var f = r[1];
                         var z = f.slice(0, -1);
                         console.log(z);
                         $('#votes').html(numberWithCommas(z));
                    }
                    vote();
               } catch (err) {
                    console.log('error');
                    vote();
               }

          });
     }
     vote();
</script>