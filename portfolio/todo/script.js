$(document).ready(function () {
    // Add Task
    $('#add-button').on('click', function () {
        var newTask = $('#new-task').val();
        if (newTask !== '') {
            $('#tasks-list').append('<li class="task"><span class="task-text">' + newTask + '</span><span class="delete-button">Delete</span><span class="complete-button">Completed</span></li>');
            $('#new-task').val('');
        }
    });

    // Delete Task
    $('#tasks-list').on('click', '.delete-button', function () {
        $(this).closest('li').remove();
    });

    // Mark Task as Completed
    $('#tasks-list').on('click', '.complete-button', function () {
        $(this).closest('li').toggleClass('completed');
    });
});