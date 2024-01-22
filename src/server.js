const express = require("express");
const app = express();

app.get("/", (res) => {
  res.redirect("/home");
});

app.get("home", (res) => {
  res.send("home.html");
});
