$(document).ready(function() {
  function filterTable() {
    var search = $('input[placeholder="Search users..."]').val().toLowerCase();
    var role = $('.role-filter').val().toLowerCase();
    var status = $('.status-filter').val().toLowerCase();

    $('#tableData tr').each(function() {
      var name = $(this).find('td:nth-child(1) span').text().toLowerCase();
      var email = $(this).find('td:nth-child(2)').text().toLowerCase();
      var rowRole = $(this).find('select.role-change').val().toLowerCase();
      var rowStatus = $(this).find('.status-change').is(':checked') ? 'active' : 'pending';

      // Word search: split search input into words and check if all words exist in name/email
      var show = true;
      if (search) {
        var words = search.split(' ');
        for (var i = 0; i < words.length; i++) {
          if (name.indexOf(words[i]) === -1 && email.indexOf(words[i]) === -1) {
            show = false;
            break;
          }
        }
      }

      // Role filter
      if (role && rowRole !== role) {
        show = false;
      }

      // Status filter
      if (status && rowStatus !== status) {
        show = false;
      }

      $(this).toggle(show);
    });
  }

  // Trigger filtering on keyup for search and change for dropdowns
  $('input[placeholder="Search users..."]').on('keyup', filterTable);
  $('.role-filter, .status-filter').on('change', filterTable);

  // Initial filter
  filterTable();
});