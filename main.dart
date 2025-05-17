import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'dart:convert';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: ExchangeRateScreen(),
    );
  }
}

class ExchangeRateScreen extends StatefulWidget {
  @override
  _ExchangeRateScreenState createState() => _ExchangeRateScreenState();
}

class _ExchangeRateScreenState extends State<ExchangeRateScreen> {
  String targetCurrency = 'EUR';
  double exchangeRate = 0.0;
  bool isLoading = false;

  List<String> currencies = ['EUR', 'RUB', 'USD'];

  Future<void> getExchangeRate() async {
    setState(() {
      isLoading = true;
    });

    try {
      final uri = Uri.https(
        'api.exchangerate.host',
        '/latest',
        {'base': 'USD', 'symbols': targetCurrency},
      );

      final response = await http.get(uri);

      print('API Response: ${response.body}'); // DEBUG LINE

      if (response.statusCode == 200) {
        final data = json.decode(response.body);
        final rate = data['rates'][targetCurrency];

        setState(() {
          exchangeRate = (rate is double) ? rate : 0.0;
        });
      } else {
        print('Failed to load exchange rate. Status: ${response.statusCode}');
      }
    } catch (e) {
      print('Error fetching data: $e');
    }

    setState(() {
      isLoading = false;
    });
  }

  @override
  void initState() {
    super.initState();
    getExchangeRate();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: Text('USD to $targetCurrency')),
      body: Center(
        child: isLoading
            ? CircularProgressIndicator()
            : Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            Text(
              'Select Currency:',
              style: TextStyle(fontSize: 20),
            ),
            SizedBox(height: 10),
            DropdownButton<String>(
              value: targetCurrency,
              items: currencies.map((currency) {
                return DropdownMenuItem(
                  value: currency,
                  child: Text(currency),
                );
              }).toList(),
              onChanged: (value) {
                setState(() {
                  targetCurrency = value!;
                });
                getExchangeRate();
              },
            ),
            SizedBox(height: 30),
            Text(
              '1 USD = ${exchangeRate.toStringAsFixed(4)} $targetCurrency',
              style: TextStyle(fontSize: 24, fontWeight: FontWeight.bold),
            ),
            SizedBox(height: 30),
            ElevatedButton(
              onPressed: getExchangeRate,
              child: Text('Refresh'),
            ),
          ],
        ),
      ),
    );
  }
}
