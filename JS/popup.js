function check() {
    var reason = prompt("job or project?");
    if (reason === "job") {
        var jt = prompt("part-time, full-time, or internship?");
        alert(jt);
    } else if (reason === "project") {
        var pt = prompt("ML, Data Science, or others?");
        alert(pt);
    } else {
        alert("Thank You");
    }
}