<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Tabela</title>
  </head>
  <body>
    <style>
      tr, th, td{
        border: 1px inset #000;
      }

      td:nth-child(9){
        border: none;
      }

      th{
        background: lightblue;
      }

    </style>


    <table>
      <form class="" action="./tabform_data.php" method="get">
        <table>
          <tr>
            <th>Name</th>
            <th>Value</th>
          </tr>
          <tr>
            <td>Name</td>
            <td><input type="text" name="imie"></td>
          </tr>
          <tr>
            <td>Sex</td>
            <td><input type="radio" name="plec" value="M">Male<br>
            <input type="radio" name="plec" value="F">Female</td>
          </tr>
          <tr>
            <td>Eye color</td>
            <td><select name="color">
            <option>green</option>
            <option>brown</option>
            <option>blue</option>
            </select></td>
          </tr>
          <tr>
            <td>Check all that apply</td>
            <td><input type="checkbox" name="wybor" value="fir">Over 6 feet tall<br>
            <input type="checkbox" name="wybor" value="sec">Over 200 pounds</td>
          </tr>
          <tr>
            <td>Describe your athletic ability:<br><textarea name="area"></textarea></td>
            <td></td>
          </tr>
          <tr>
            <td><input type="submit" name="przeslij" value="Enter my information"></td>
            <td></td>
          </tr>
        </table>
      </form>
    </table>
  </body>
</html>
