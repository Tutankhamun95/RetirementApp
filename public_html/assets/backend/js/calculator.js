var current_age = document.getElementById('current_age');
var retirement_age = document.getElementById('retirement_age');
var expected_monthly = document.getElementById('expected_monthly');
var expected_yearly = document.getElementById('expected_yearly');
var expected_post_retirement = document.getElementById('expected_post_retirement');
var inflation_rate = document.getElementById('inflation_rate');
var interest_rate = document.getElementById('interest_rate');
var years_to_retire = document.getElementById('years_to_retire');
var first_year_expenses = document.getElementById('first_year_expenses');
var sum_required = document.getElementById('sum_required');
var income_aside = document.getElementById('income_aside');
var projected_savings = document.getElementById('projected_savings');
var projected_insurance_policy = document.getElementById('projected_insurance_policy');
var projected_cpf_savings = document.getElementById('projected_cpf_savings');
var projected_value_assets = document.getElementById('projected_value_assets');
var total_funds = document.getElementById('total_funds');
var total_shortfall = document.getElementById('total_shortfall');

var $rz;
var $rzb;
var $rzn;

current_age.addEventListener("input", functions);
retirement_age.addEventListener("input", functions);
expected_monthly.addEventListener("input", functions);
expected_post_retirement.addEventListener("input", functions);
inflation_rate.addEventListener("input", functions);
interest_rate.addEventListener("input", functions);

function functions() {
  
    var ca = parseFloat(current_age.value) || 0;
    var ra = parseFloat(retirement_age.value) || 0;
    var em = parseFloat(expected_monthly.value) || 0;
    var epr = parseFloat(expected_post_retirement.value) || 0;
    var infr = parseFloat(inflation_rate.value) || 0;
    var intr = parseFloat(interest_rate.value) || 0;
    // var ytr = parseFloat(years_to_retire.value) || 0;
      
    var expectedYearly = em*12;
    var currentAge = ca;
    var retirementAge = ra;
    var expectedPostRetirement = epr;
    var inflationRate = infr;
    var interestRate = intr;
    var yearsToRetire = ra-ca;
    var firstYearExpenses = ca;
    
    currentage.innerHTML = "Your current age is : " + currentAge;
    retirementage.innerHTML = "Your retirement age is : " + retirementAge;
    expectedyearly.innerHTML = "Expected yearly expenses required during retirement years : " + expectedYearly;
    expectedpostretirement.innerHTML = "Your expected lifespan post retirement is : " + expectedPostRetirement;
    inflationrate.innerHTML = "Inflation rate is : " + inflationRate;
    interestrate.innerHTML = "Inflation rate is : " + interestRate;
    yearstoretire.innerHTML = "Number of Years to Retirement : " + yearsToRetire;
    firstyearexpenses.innerHTML = "Total sum required in" + yearsToRetire + " years to fund your retirement : " + firstYearExpenses;
}