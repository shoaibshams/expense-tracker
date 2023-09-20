<div>
    <x-layouts.breadcrumb />

    <div class="card">
        <div class="card-body">
            <div id="calendar" class="mt-4"></div>
        </div>
    </div>

    <div class="modal fade" id="modalNotification" tabindex="-1" role="dialog" aria-labelledby="modalTitleNotify" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-success text-white" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title" id="modalTitleNotify">Transaction Details</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered text-white">
                        <tr>
                            <th>Date</th>
                            <td id="date"></td>
                        </tr>
                        <tr>
                            <th>Account</th>
                            <td id="account"></td>
                        </tr>
                        <tr>
                            <th>Category</th>
                            <td id="category"></td>
                        </tr>
                        <tr>
                            <th>Amount</th>
                            <td id="amount"></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td id="description"></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            height: 'auto',
            dayMaxEvents: 2,
            moreLinkClassNames: 'badge border-0 bg-gray-500',
            eventClick: function(info) {
                $('#date').text(info.event.extendedProps.date)
                $('#account').text(info.event.extendedProps.account)
                $('#category').text(info.event.extendedProps.category)
                $('#amount').text(info.event.extendedProps.amount)
                $('#description').text(info.event.extendedProps.description)
                $('#modalNotification').modal('show')
            },

            events: {!! $transactions_data !!}
        });

        calendar.render();
    </script>
@endpush
