<!DOCTYPE html>
<html>
<style>
p.round {
  border: 2px solid grey;
  border-radius: 6px;
  padding: 5px;
}
button{ 
width: 23%;
  padding: 12px 15px;
  border-radius: 12px;
}
</style>
<body>
<h2>Make A Transaction</h2>
<p class="round">
<button type="button" onclick="window.location.href = 'deposit.html'" class="deposit"><b> Deposit </b> </button>
<button type="button" onclick="window.location.href = 'withdraw.html'" class="deposit"><b> Withdraw </b> </button>
<button type="button" class="withdraw" onclick="window.location.href = 'sendmoney.html'"><b> Send Money </b> </button>
<button type="button" class="Sendmoney" onclick="window.location.href = 'index.html'"><b> Cancel </b> </button>
</p>
</body>
</html>