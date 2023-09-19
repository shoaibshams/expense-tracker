<div>
    <div id="calendar" class="mt-4"></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            initialDate: '2023-09-12',

            eventClick: function(info) {
                alert('Event: ' + info.event.title);
            },

            events: [
                {
                    title: 'All Day Event',
                    description: 'description for All Day Event',
                    start: '2023-09-01',
                    className: 'badge bg-danger',
                },
                {
                    title: 'Birthday Party',
                    description: 'description for Birthday Party',
                    start: '2023-09-13T07:00:00'
                },
                {
                    title: 'Click for Google',
                    description: 'description for Click for Google',
                    url: 'https://google.com/',
                    start: '2023-09-28'
                }
            ]
        });

        calendar.render();
    });
</script>
