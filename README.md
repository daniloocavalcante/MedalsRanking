# Medals Ranking

## What is it?
My code is responsible for organizing a medal ranking of olympic games.
The correct way to organize is by the number of gold, silver and the bronze medals.
Basically, you must insert a json aleatory input and click in the button Rank Now.
And the code does the magic.

## Useful Link
- [IOC CODE](https://en.wikipedia.org/wiki/List_of_IOC_country_codes)


### Member Table Example

| IOC_CODE   | Gold | Silver| Bronze | last_gold_at        | last_silver_at      | last_bronze_at      |
| ---        |  --- | ---   | ---    | ---                 | ---                 | ---                 |
| [BRA]      | 1    |  2    |  2     | 2024-07-29 16:02:18 | 2024-08-02 16:04:18 | 2024-08-10 16:02:18 |
| [USA]      | 2    |  2    |  2     | 2024-07-29 16:02:18 | 2024-08-02 16:50:18 | 2024-08-01 16:30:18 |
| [FRA]      | 2    |  2    |  2     | 2024-07-30 16:00:18 | 2024-07-30 16:09:18 | 2024-07-30 16:21:18 |
| [CAN]      | 2    |  2    |  2     | 2024-07-31 16:00:18 | 2024-07-31 16:02:18 | 2024-07-31 06:22:18 |
| [CHN]      | 2    |  2    |  2     | 2024-08-03 16:00:18 | 2024-08-01 16:02:18 | 2024-08-01 16:22:18 |


### Principal Code 🗺️ 

Below you will see the magic code.

```dart
$json = json_decode(@$request->json_input);

        foreach ($json->members as $key => $value) {
            $names[$key] = $value->name;
            $medals[$key] = [$value->gold,$value->silver,$value->bronze];
            $ordem[$key] = [$value->last_gold_at,$value->last_silver_at,$value->last_bronze_at];
        }

        asort($ordem); //Organizando por tempo   


        foreach ($ordem as $key1 => $value2) {
            $med[$key1] = [$medals[$key1][0], $medals[$key1][1], $medals[$key1][2]];
        }

        arsort($med); //Organizando por medalhas


        foreach ($med as $key3 => $value3){
            $out[$key3] = array( "name" => $names[$key3],
                                    "gold" => $med[$key3][0],
                                    "silver" => $med[$key3][1],
                                    "bronze" => $med[$key3][2],
                                    "last_gold_at" => $ordem[$key3][0],
                                    "last_silver_at" => $ordem[$key3][1],
                                    "last_bronze_at" => $ordem[$key3][2],
                                     );
        }
        $output = json_encode($out, JSON_UNESCAPED_UNICODE)

```


### Contributing

Feel free to contribute the code :)

