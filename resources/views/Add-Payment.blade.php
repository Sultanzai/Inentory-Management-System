<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group input[type="date"] {
            padding: 7px;
        }

        .form-group input:focus, .form-group select:focus {
            border-color: #373737;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #000000;
            border: none;
            border-radius: 4px;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #141414;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Add Payment</h2>
        <div class="row">
            <label for="customer">Select Invoice</label>
          </div>
        <form action="/Paymentform" method="POST">
        @csrf
            <div class="row">
                <select name="OrderID" id="OrderID" required>
                    @foreach($order as $ord)
                        <option value="{{ $ord->id }}">{{ $ord->id }}</option>
                    @endforeach
                </select>
            </div> 
            <div class="form-group">
                <label for="P_Amount">Payment Amount:</label>
                <input type="text" id="P_Amount" name="P_Amount" required>
            </div>
            <div class="form-group">
                <label for="P_Type">Payment Type:</label>
                <select id="P_Type" name="P_Type" required>
                    <option value="Cash">Cash</option>
                    <option value="Check" >Check</option>
                    <option value="EZZT" >EZZT</option>
                    <option value="Bank Transfer" >Bank Transfer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="P_Status">Payment Status:</label>
                <select id="P_Status" name="P_Status" required>
                    <option value="Unpaid" >Unpaid</option>
                    <option value="Pending">Pending</option>
                    <option value="Process">Pending</option>
                    <option value="Completed" >Completed</option>
                    <option value="Refunded" >Refunded</option>
                </select>
            </div>
            <div class="form-group">
                <label for="P_Date">Payment Date:</label>
                <input type="date" id="P_Date" name="P_Date" required>
            </div>
            <div class="form-group">
                <button type="submit">Update Payment</button>
            </div>
        </form>
    </div>
</body>
</html>
