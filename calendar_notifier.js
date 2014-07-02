/* libcalendaring plugin initialization */
window.rcmail && rcmail.addEventListener('init', function(evt) {
  rcmail.addEventListener('plugin.display_alarms', function(alarms){
      if ('Notification' in window) {
          Notification.requestPermission(function() {
              new Notification(rcmail.gettext('title', 'calendar_notifier'), {
                  dir: "auto",
                  lang: "",
                  body: rcmail.gettext('body', 'calendar_notifier'),
                  tag: 'calendar_notifier',
                  icon: "plugins/calendar/skins/classic/images/calendar.png"
              });
          });
      }
  });
});
