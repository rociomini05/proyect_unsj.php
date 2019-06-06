<style>
    body {
        font-family: "Droid Sans", sans-serif;
        color: #a6acae;
    }

    #estilo_cuerpo_evento {
        background-color: white !important;
    }

    /*HEAD */
    #estilo_modificarevento {
        background-color: #0084b4;
        margin-bottom: 15px;
    }

    #estilo_titulomodificar {
        color: white;
        font-family: Calibri;
        display: inline-block;
    }

    /* TABS */
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
        background-color: white !important;
    }

    #estilo_tabs {
        font-family: Calibri;
        font-size: 13px;
        font-weight: bold;
        color: #7c7c7c !important;
    }

    #estilo_tabs :focus {
        background-color: #349bb7 !important;
        color: white !important;
    }

    #estilo_tabs :hover {
        background-color: #00aad8 !important;
        color: white !important;
    }

    #estilo_tabs :visited {
        background-color: red !important;
        color: white !important;
    }


</style>

<link type="text/css" href="<?=base_url('plugins/fullcalendar/fullcalendar.css')?>" rel="stylesheet">
<div class="container">
    <div class="col-md-2"></div>
    <div class="col-md-8" id="estilo_cuerpo_evento">
        <div class="row">
            <div class="col-md-12" id="estilo_modificarevento">
                <h3 id="estilo_titulomodificar">EVENTOS</h3>
                
            </div>
        </div>
       
        <!-- GENERAL -->
<div id="calendar">
  
</div>
  <hr>       
</div>        

  
    <div class="col-md-2"></div>
</div>

<script>
  $(document).ready(function() {
    
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      defaultDate: '2014-06-12',
      defaultView: 'month',
      editable: true,
      events: [
        {
          title: 'All Day Event',
          start: '2014-06-01'
        },
        {
          title: 'Long Event',
          start: '2014-06-07',
          end: '2014-06-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2014-06-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2014-06-16T16:00:00'
        },
        {
          title: 'Meeting',
          start: '2014-06-12T10:30:00',
          end: '2014-06-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2014-06-12T12:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2014-06-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2014-06-28'
        }
      ]
    });
    
  });
</script>
