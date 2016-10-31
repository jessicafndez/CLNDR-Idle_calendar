<?
  /* Typical event class */
  class Event
  {
    public $event_title;
    public $event_date;
    public $event_city;
    public $event_link;
    public $event_type;
  }

  $event1 = new Event();
  $event1->event_title = 'Pete Tong presents Ibiza Classics';
  $event1->event_date = '2016-10-31';
  $event1->event_hour = '20:30h';
  $event1->event_city = 'Oslo';
  $event1->event_link = 'http://www.timeout.com/london/music/pete-tong-presents-ibiza-classics';
  $event1->event_type = '3';

  $event2 = new Event();
  $event2->event_title = 'Kenny Rogers';
  $event2->event_date = '2016-10-31';
  $event2->event_hour = '21:30h';
  $event2->event_city = 'Møre og Romsdal';
  $event2->event_link = 'http://www.timeout.com/london/music/kenny-rogers';
  $event2->event_type = '3';

  /* ...............  You can add all event you want ..............  */
  /* ..............................................................  */
  /* ................  If you want MySQL database .................  */
  /* ..............................................................
      
      $conn = new mysqli(....);
      .....
      
  ...................................................................  */

  $my_event_array = array($event1 , $event2);

  echo json_encode($my_event_array);
?>
