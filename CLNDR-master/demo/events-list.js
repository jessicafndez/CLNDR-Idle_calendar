function formatToCLNDR(dataString) {
  var arr = [];

  for (i=0; i<dataString.length; i++) {
    
    arr.push({
        title: dataString[i]["event_title"],
        date: dataString[i]["event_date"],
        hour: dataString[i]["event_hour"],
        city: dataString[i]["event_city"],
        link: dataString[i]["event_link"],
        type: dataString[i]["event_type"]
    });
  }

  return arr;
}
