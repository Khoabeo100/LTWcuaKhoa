<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt Upload Form</title>
    <link rel="stylesheet" href="in.css">

</head>
<body>

    <h1>Payment Receipt Upload Form</h1>
    <form id="paymentForm" method="POST" action="submit.php" onsubmit="return handleFormSubmit(event)">
        <div class="form-group">
            <label for="name" >Name</label>
            <div class="form-row">
                <div class="form-group">
                    <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-row">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="example@example.com" required>
                </div>
                <div class="form-group">
                    <label for="invoiceId">Invoice ID</label>
                    <input type="text" id="invoiceId" name="invoiceId" placeholder="Invoice ID" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Pay For</label>
            <div class="checkbox-group">
                <div><input type="checkbox" name="payFor[]" value="15K Category"> 15K Category</div>
                <div><input type="checkbox" name="payFor[]" value="35K Category"> 35K Category</div>
                <div><input type="checkbox" name="payFor[]" value="55K Category"> 55K Category</div>
                <div><input type="checkbox" name="payFor[]" value="75K Category"> 75K Category</div>
                <div><input type="checkbox" name="payFor[]" value="116K Category"> 116K Category</div>
                <div><input type="checkbox" name="payFor[]" value="Shuttle Two Ways"> Shuttle Two Ways</div>
                <div><input type="checkbox" name="payFor[]" value="Shuttle One Way"> Shuttle One Way</div>
                <div><input type="checkbox" name="payFor[]" value="Compressport T-Shirt Merchandise"> Compressport T-Shirt Merchandise</div>
                <div><input type="checkbox" name="payFor[]" value="Training Cap Merchandise"> Training Cap Merchandise</div>
                <div><input type="checkbox" name="payFor[]" value="Buf Merchandise"> Buf Merchandise</div>
                <div><input type="checkbox" name="payFor[]" value="Other"> Other</div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit">Submit</button>
        </div>
    </form>

    <script>
    function handleFormSubmit(event) {
    event.preventDefault(); 


    var firstName = document.getElementById('firstName').value.trim();
    var lastName = document.getElementById('lastName').value.trim();
    var email = document.getElementById('email').value.trim();
    var invoiceId = document.getElementById('invoiceId').value.trim();
    var checkboxes = document.querySelectorAll('input[name="payFor[]"]:checked');


    var errors = [];

    if (!firstName) {
        errors.push("Bạn chưa nhập Tên.");
    } else if (!/^[\p{L}\s]+$/u.test(firstName)) {
        errors.push("Tên chỉ được chứa chữ cái và khoảng trắng.");
    }

    if (!lastName) {
        errors.push("Bạn chưa nhập Họ.");
    } else if (!/^[\p{L}\s]+$/u.test(lastName)) {
        errors.push("Họ chỉ được chứa chữ cái và khoảng trắng.");
    }

    if (!email) {
        errors.push("Bạn chưa nhập Email.");
    } else if (!/^[\w-.]+@([\w-]+\.)+[a-zA-Z]{2,7}$/.test(email)) {
        errors.push("Email không hợp lệ.");
    }

    if (!invoiceId) {
        errors.push("Bạn chưa nhập ID Hóa Đơn.");
    } else if (!/^\d+$/.test(invoiceId)) {
        errors.push("ID Hóa Đơn phải là số.");
    }

    if (checkboxes.length === 0) {
        errors.push("Vui lòng chọn ít nhất một tùy chọn 'Pay For'.");
    }

    if (errors.length > 0) {
        alert(errors.join("\n")); 
        return false;
    }

    var form = document.getElementById("paymentForm");
    var formData = new FormData(form);

    fetch(form.action, {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.error) {
            alert(data.error); 
        } else if (data.success) {
            var message = "Gửi thông tin thành công!\n\n";
            for (var key in data.data) {
                message += key + ": " + data.data[key] + "\n";
            }
            alert(message); 
        }
    })
    .catch(error => {
        console.error('Lỗi:', error);
    });

    return false; 
}
    </script>
    
<button style="
    width: 70px;
    background-color: rgba(218, 210, 210, 0.3);
    border: 3px solid black;
    cursor: pointer;
    height: 70px;
    border-radius: 10px;
    border: none;
    display: inline-block;
    position: fixed;
    right: 0px;
    bottom: 0px;"
>
    <a href="http://laptrinhwebkhoabeo.000.pe">
    <img src="home1.png" style="width: 60%;"></a>
</button>
</body>
</html>
