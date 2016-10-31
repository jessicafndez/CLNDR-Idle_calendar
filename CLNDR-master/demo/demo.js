// Call this from the developer console and you can control both instances
var calendars = {};

$(document).ready( function() {

        //need ajax Here
         var dataString = new Array();
        $.ajax({
           type: 'POST',
           async: false,
           url: 'https://jessicafndez.github.io/CLNDR-Idle_calendar/CLNDR-master/demo/events.php',
           cache: false,


           success: function(data){
             dataString = data;
           },
           dataType:"json"
       });

    //   console.log(dataString);
      var dataFormated = formatToCLNDR(dataString);



    // Assuming you've got the appropriate language files,
    // clndr will respect whatever moment's language is set to.
     //moment.locale('nb');
     moment.locale('en');

    // Here's some magic to make sure the dates are happening this month.
    var thisMonth = moment().format('YYYY-MM');
    // Events to load into calendar


    // The order of the click handlers is predictable. Direct click action
    // callbacks come first: click, nextMonth, previousMonth, nextYear,
    // previousYear, nextInterval, previousInterval, or today. Then
    // onMonthChange (if the month changed), inIntervalChange if the interval
    // has changed, and finally onYearChange (if the year changed).
    calendars.clndr1 = $('.cal1').clndr({
        //events: eventArray,
        events: dataFormated,
        clickEvents: {
            click: function (target) {
                var l = target.events.length;

                // Get the modal
                $('#myModal').modal('show');
                $('#myModalLabel').text('Events in ' + target.date._i);

                for(i=0; i<l; i++) {
                  var title = target.events[i].title;
                  var city = target.events[i].city;
                  var hour = target.events[i].hour;
                  var link = target.events[i].link;

                  $(".caption-label").append("<a href=" + link + ">" + hour + ": " + title + " (<i>" + city + "</i>)" + "</a><br>");
                }
            },
            today: function () {
                console.log('Cal-1 today');
            },
            nextMonth: function () {
                console.log('Cal-1 next month');
            },
            previousMonth: function () {
                console.log('Cal-1 previous month');
            },
            onMonthChange: function () {
                console.log('Cal-1 month changed');
            },
            nextYear: function () {
                console.log('Cal-1 next year');
            },
            previousYear: function () {
                console.log('Cal-1 previous year');
            },
            onYearChange: function () {
                console.log('Cal-1 year changed');
            },
            nextInterval: function () {
                console.log('Cal-1 next interval');
            },
            previousInterval: function () {
                console.log('Cal-1 previous interval');
            },
            onIntervalChange: function () {
                console.log('Cal-1 interval changed');
            }
        },
        multiDayEvents: {
            singleDay: 'date',
            endDate: 'endDate',
            startDate: 'startDate'
        },
        showAdjacentMonths: true,
        adjacentDaysChangeMonth: false
    });
  });
