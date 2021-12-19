function setTime()
{
    var timestamp = document.getElementsByClassName('timestamp');
    var dateofmatch = document.getElementsByClassName('dateofmatch');
    var t, h, min, pm, months;
    var tempTimestamp = [];
    var tempDateofmatch = [];
 
 
    for (var i = 0; i < timestamp.length; i++)
    {
        t = new Date(timestamp[i].innerHTML),
            hours = t.getHours(),
            min = t.getMinutes() + '',
            pm = false,
            months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
 
        if (hours > 11) {
            hours = hours - 12;
            pm = true;
        }
 
        if (hours == 0) hours = 12;
        if (min.length == 1) min = '0' + min;
      
      
 
        timestamp[i].innerHTML = hours + ':' + min + ' ' + (pm ? 'pm' : 'am') + "<br/>";
    }

    for (var i = 0; i < dateofmatch.length; i++)
    {
        t = new Date(dateofmatch[i].innerHTML),
            hours = t.getHours(),
            min = t.getMinutes() + '',
            pm = false,
            months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
 
        if (hours > 11) {
            hours = hours - 12;
            pm = true;
        }
 
        if (hours == 0) hours = 12;
        if (min.length == 1) min = '0' + min;
      
      
        // choose output values
        dateofmatch[i].innerHTML = months[t.getMonth()] + ' ' + t.getDate() + ', ' + t.getFullYear() + "<br/>";
    }
}