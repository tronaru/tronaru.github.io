<?php
$groups = '00g2xhvda7SPveJUw2p7,00g2xhxrjunQ1IHju2p7,00g2xhxrl8gQGnQS52p7,00g2xhx0tiS0j8BQM2p7,00g2xhw7fo6agMAYD2p7,00g2xhw71lEHjvkbD2p7,00g2xhvyrtQrwKkbM2p7,00g2xhv9lhcqEoRAH2p7,00g2xhw725Xp95xZO2p7,00g2xhvo6hIsuthcn2p7,00g2xhvo6urg1UB5r2p7,00g2xhvdciwRDdTm92p7,00g2xhynjbT1HFlkA2p7,00g2xhxrmns8m6Qco2p7,00g2xhv9jeduRbRxH2p7,00g2xhvdczO6tlHWa2p7,00g2xhvzinvIySv4P2p7,00g2xhvo7l02Pm7pY2p7,00g2xhxo5wK6qDFwc2p7,00g2xhvzjblgMPiHT2p7,00g2xhxde1ReRZUzc2p7,00g2xhvddmMbBusrG2p7,00g2xhynkfthLbMh52p7,00g2xhvzjkxvGYuA22p7,00g2xhvo8gUh6waDR2p7,00g2xhw6zs2LGlaYM2p7,00g2xhvyubqh79jkf2p7,00g2xhw740xV5Pz6W2p7,00g2xhxroiEOUCBFW2p7,00g2xhvky71suuNLN2p7,00g2xhvyvaIN5YdGk2p7,00g2xhw74nYwAB7Ck2p7,00g2xhynlgVHZDldm2p7,00g2xhym0abSlw5eh2p7,00g2xhxdgktXMSO9O2p7,00g2xhvzmx3po9BUP2p7,00g2xhxrk6yzZdpoD2p7,00g2xhux91gBjuhd32p7,00g2xhw75sJwqD48Z2p7,00g2xhxrq5SUWHKS02p7,00g2xhynn4BlpFIR32p7,00g2xhym1af6PkyBK2p7,00g2xhxo9hGukqIW52p7,00g2xhw76ut8rbc432p7,00g2xhynntiWjzrBq2p7,00g2xhxyv37mqNyRm2p7,00g2xhw83ojNEXEwh2p7,00g2xhw7wxK6h5vnp2p7,00g2xhym2h7qdHdzw2p7,00g2xhvl2ynMGvKDv2p7,00g2xhxrt22cJ6W182p7,00g2xhxdjrrEc7Gkt2p7,00g2xhw78acCf0es72p7,00g2xhw78hae80yqr2p7,00g2xhxywpfFKHDOD2p7,00g2xhxobecx0rwYa2p7,00g2xhym3q3crYRwb2p7,00g2xhw85jIzDlonT2p7,00g2xhvzfuOKqcsnH2p7,00g2xhvz0mRElKrth2p7,00g2xhy5zt0HOEF722p7,00g2xhz1k4btiEwc92p7,00g2xhy606igfoVyh2p7,00g2xhym55n1v8Eqe2p7,00g2xhw7a4RZdpgTr2p7,00g2xhvl5lUKnT4U82p7,00g2xhx0o7lQeyPu52p7,00g2xhvz1ygnvS1H52p7,00g2xhvz26M9IIEj42p7,00g2xhv9k5j2vxSpl2p7,00g2xhz1l9XCX29l02p7,00g2xhz1leMfwDCD32p7,00g2xhx0otR8IaZaQ2p7,00g2xhw7b1lnDQXLX2p7,00g2xi0d906Xrdv1Y2p7,00g2xhzczuPv2rS752p7,00g2xhzczwLUepP7i2p7,00g2xhw884g6w7HCa2p7,00g2xhxoe0jKEijP22p7,00g2xhzif6C9zClhE2p7,00g2xhvo5lMgzIIGW2p7,00g2xhxoehFMxoKux2p7,00g2xhw88uqHJdqCJ2p7,00g2xhz1mq90t8UmJ2p7,00g2xhy64235JHvY52p7,00g2xhzxtkcpeOmn92p7,00g2xhysffpznC2bh2p7,00g2xhxdntCypv01r2p7,00g2xhz1npbrIdwMs2p7,00g2xhym7yZUvmAZS2p7,00g2xhxdoclJx55MM2p7,00g2xhv9krd5fGxTf2p7,00g2xhxofkNblEgbR2p7,00g2xhw7e2QH3bUIc2p7,00g2xhz1p1SyPe5v52p7,00g2xhy65aLgyY2u72p7,00g2xhxogikWTzggE2p7,00g2xhysglNj1eFKx2p7,00g2xhw7f15H1u0SF2p7,00g2xi0dd6bRcYB7t2p7,00g2xhzd3fu2dx0re2p7,00g2xhyma0lAppl9q2p7';
$array =  explode(',', $groups);
foreach ($array as $item) {
$request = new HttpRequest();
$request->setUrl('https://tronaru.okta.com/api/v1/groups/$item/users/00u1326humJGMXiAy2p7');

$request->setMethod(HTTP_METH_PUT);

$request->setHeaders(array(
  'Postman-Token' => '216b2b75-4a6a-4c2a-b859-8b679ee9f61f',
  'cache-control' => 'no-cache',
  'Authorization' => 'SSWS 00Ur1yF_qhq95idCxwN7qAkK9WkyjjgquygsBXoPz6',
  'Content-Type' => 'application/json',
  'Accept' => 'application/json'
));

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}
}
?>
