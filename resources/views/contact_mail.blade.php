<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h2>Hello Admin</h2>

    A new message has been arrived. Details are given below:<br><br><br>


    <table>

        <tr>
            <th>Details</th>
            <th>Info</th> 
            
          </tr>
          <tr>
            <td>Name</td>
            <td>
                {{-- {{ json_encode($name) }} --}}

                {{ trim(json_encode($name), '"' )}}
            </td>
           
          </tr>
          <tr>
            <td>Email</td>
            <td>
                {{ trim(json_encode($email), '"') }}
            </td>
            
          </tr>


          <tr>
            <td>Subject</td>
            <td>
            {{ trim(json_encode($subject), '"') }}

            </td>
          </tr>

        <tr>
            <td>
                Message
            </td>
            <td>
            {{ trim(json_encode($message), '"') }}

            </td>
        </tr>

        {{-- <tr>
            <b>Name</b>
        </tr>
        <td>
            {{ json_encode($name) }}
        </td>

        <tr>
            <b>Email</b>
        </tr>
        <td>
            {{ json_encode($email) }}
        </td>

        <tr>
            <b>Subject</b>
        </tr>
        <td>
            {{ json_encode($subject) }}
        </td>

        <tr>
            <b>Message</b>
        </tr>
        <td>
            {{ json_encode($message) }}
        </td> --}}
        
    </table>
    
</body>
</html>