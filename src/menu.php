<!DOCTYPE html>
<html>
<head>
<style>
.btn-group .button {
    background-color: #4CAF50; /* Green */
    border: 1px solid green;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    float: left;
}
.btn-group .button:not(:last-child) {
    border-right: none; /* Prevent double borders */
}
.btn-group .button:hover {
    background-color: #3e8e41;
}
</style>
</head>
<body>
<div class="btn-group">
  <button class="button">Button</button>
  <button class="button">Button</button>
  <button class="button">Button</button>
  <button class="button">Button</button>
</div>



</body>
</html>
