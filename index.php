<!DOCTYPE html>
<html lang="en">
<HEAD>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="main.css">
    <style>
    </style>
    <script src="aaa.js"></script>
</HEAD>
<BODY>
   <form id="hai">
       <h1 style="text-align: centrer;">
            Information form
       </h1>
       <tr>
           <td>
                Name   ..
           </td>
           <td>
               <input type="text" id="name">
           </td>
       </tr>
    </br>
       <tr>
           <td>
                Age . . .
           </td>
           <td>
               <input type="text" id="age">
           </td>
       </tr>
    </br>
       <tr>
           <td>
               Address
           </td>
           <td>
               <input type="text" id="address">
           </td>
       </tr>
    </br>
       <tr>
           <td>
               Gới tính
           </td>
           <td>
               <input type="radio" name="gioitinh" value="Gay" checked>Gay
               <input type="radio" name="gioitinh" value="Nam" checked>Nam
               <input type="radio" name="gioitinh" value="Nữ" checked>Nữ
           </td>
       </tr>
    </br>
       
      <input onclick="send()" type="button" value="submit">
   </form>
</BODY>
</html>