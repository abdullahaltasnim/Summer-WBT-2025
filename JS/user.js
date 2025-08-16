var user1 = [
    {
        username: "abdullah",
        password: "aaaa"
    }
];

var newsfeed = [
    {
        username: "alan",
        job: "Fulltime",
        meetingSchedule: "18/08/2025"
    },
    {
        username: "jake",
        project: "Machine Learning",
        meetingSchedule: "20/08/2025"
    }
];

var userNamePrompt = prompt("Your username?");
var passwordPrompt = prompt("Your password?");

function signIn(user, pass) {
    if (user === user1.username && pass === user1.password) {
        console.log("Login successful!");
        console.log(newsfeed);
        alert("Login successful!");
    } else {
        console.log("Incorrect username or password");
        alert("Incorrect username or password!");
    }
}


signIn(userNamePrompt, passwordPrompt);





