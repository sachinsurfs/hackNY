
module.exports = function(callback) {
  account1 = web3.eth.accounts[1];
  GustavoCoinCrowdsale.deployed().then(inst => { crowdsale = inst })
  crowdsale.token().then(addr => { tokenAddress = addr } )
  gustavoCoinInstance = GustavoCoin.at(tokenAddress)
  
  GustavoCoinCrowdsale.deployed().then(inst => inst.sendTransaction({ from: account1, value: web3.toWei(1, "ether")}))
  web3.fromWei(account1GusTokenBalance, "ether")
}
