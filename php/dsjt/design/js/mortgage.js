document.querySelector('#filter-btn').onclick = () =>{
    document.querySelector('.filters').classList.add('active');
 }
 
 document.querySelector('#close-filter').onclick = () =>{
    document.querySelector('.filters').classList.remove('active');
 }

 function calculateMortgage(){
    var homePrice = parseFloat(document.getElementById("price").value);
    var downPayment = parseFloat(document.getElementById("d_payment").value);
    var years = parseFloat(document.getElementById("years").value);
    var interestRate = parseFloat(document.getElementById("i_rate").value) / 100;

    var Principal = homePrice - downPayment;
    var monthlyIntRate = interestRate / 12;
    var totalPayments = years * 12;
    var monthlyPayment = Principal * (monthlyIntRate * (1+monthlyIntRate)**totalPayments)/(((1+monthlyIntRate)**totalPayments)-1);

    var outputVar = document.getElementById("monthly_payment");
    outputVar.innerHTML = "<p>Monthly Payment:</p><p class='round_box'>$"+monthlyPayment.toFixed(2)+"</p>";
 }
 
 function definePrincipal(){
    var textBox = document.getElementById("text-box");
    textBox.innerHTML = "The principal is the total amount of money loaned. To calculate the principal, subtract the down payment from the total cost.";
    textBox.style.setProperty('display', 'block');
    textBox.style.setProperty('width', '18%');
    textBox.style.setProperty('font-size', '1.3rem');
 }
 
 function clearPrincipal(){
    var textBox = document.getElementById("text-box");
    textBox.innerHTML = "";
    textBox.style.setProperty('display', 'none');
 }

function defineRate(){
    var textBox = document.getElementById("text-box");
    textBox.innerHTML = "The monthly interest rate is the annual interest rate divided by 12.";
    textBox.style.setProperty('display', 'block');
    textBox.style.setProperty('width', '18%');
    textBox.style.setProperty('font-size', '1.3rem');
} 

function clearRate(){
    var textBox = document.getElementById("text-box");
    textBox.innerHTML = "";
    textBox.style.setProperty('display', 'none');
}

function definePay(){
    var textBox = document.getElementById("text-box");
    textBox.innerHTML = "The number of total payments that you would make over the lifetime of this loan. Multiply loan years by 12.";
    textBox.style.setProperty('display', 'block');
    textBox.style.setProperty('width', '18%');
    textBox.style.setProperty('font-size', '1.3rem');
}

function clearPay(){
    var textBox = document.getElementById("text-box");
    textBox.innerHTML = "";
    textBox.style.setProperty('display', 'none');
}

function defineMonthlyPay(){
    var textBox = document.getElementById("text-box");
    textBox.innerHTML = "The monthly pay is the total amount you'll pay monthly. It includes principal and interest.";
    textBox.style.setProperty('display', 'block');
    textBox.style.setProperty('width', '18%');
    textBox.style.setProperty('font-size', '1.3rem');
}

function clearMonthlyRate(){
    var textBox = document.getElementById("text-box");
    textBox.innerHTML = "";
    textBox.style.setProperty('display', 'none');
}