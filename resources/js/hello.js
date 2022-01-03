function calculateDaysBetweenDates(begin, end) {
    var days = Math.round((end - begin) / (1000 * 60 * 60 * 24));
    return days;
}