<body>
 <div class="container"></div>
  </body>
   <script src="https://code.highcharts.com/highcharts.js"></script>
   <script type="text/javascript">

        var movies =<?php echo json_encode($movies)?>;
         highcharts.chart('container', {

          title:{
           text:'Nuevas peliculas  en el sistema'
       },
       subtitle:{
           text:'Gráfica'
       }
       xAis:{
           categorias:['Ene','Feb','Mar','Ab','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic']

       },
       yAxis:{
           title:{
               text:'Nuevas peliculas'
           }
       },
       legend:{
           layout:'vertical',
           align:'right',
           verticalAlign:'middle'
       },
       plotOptions:{
           series:{
         allowPointSelect: true
           }
       },
       series:[{
               name:'Nuevas peliculas'
               data:movies
           }],
       responsive:{
           rules:[{
                   condition:{
                       maxWidth:500
                   },
                   chartOptions:{
                       legend:{
                           layout:'horizontal',
                       align:'center',
                       verticalAlign:'bottom'
                   }
               }

           }]
       }
   });
   </script>
