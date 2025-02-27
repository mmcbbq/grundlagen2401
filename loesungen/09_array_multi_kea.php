<?php

$kea_conf = ["Dhcp4" => [
    "interfaces-config" => [
        "interfaces" => ["eth1"]
    ],
    "control-socket" => [
        "socket-type" => "unix",
        "socket-name" => "/run/kea/kea4-ctrl-socket"
    ],
    "lease-database" => [
        "type" => "memfile",
        "lfc-interval" => 3600
    ],
    "valid-lifetime" => 600,
    "max-valid-lifetime" => 7200,


    "dhcp-ddns" => [
        "enable-updates" => true
    ],
    "ddns-qualifying-suffix" => "mmc-linux.zz",
    "ddns-override-client-update" => true,


    "subnet4" => [
        [
            "id" => 1,
            "subnet" => "192.168.0.0/24",
            "pools" => [
                [
                    "pool" => "192.168.0.10-192.168.0.200"
                ]
            ],
            "option-data" => [
                [
                    "name" => "routers",
                    "data" => "192.168.0.254"
                ],
                [
                    "name" => "domain-name-servers",
                    "data" => "192.168.0.254"
                ],

                [
                    "name" => "domain-name",
                    "data" => "mmc-linux.zz"
                ],
                [
                    "name" => "domain-search",
                    "data" => "mmc-linux.zz"
                ]
            ]
        ]
    ]
]

];


# lese den "socket-name" aus.
//var_dump($kea_conf['Dhcp4']['control-socket']["socket-name"]);
# lese den lease-database type aus.
//var_dump($kea_conf['Dhcp4']["lease-database"]["type"]);
# Aendere die "valid-lifetime" auf 5000,
$kea_conf['Dhcp4']["valid-lifetime"] = 5000;
# Aendere die "max-valid-lifetime" auf 10000,
$kea_conf['Dhcp4']["max-valid-lifetime"] = 10000;
# Fuege den Interfaces array die werte wlan0 und eth0 hinzu
$kea_conf['Dhcp4']['interfaces-config']['interfaces'][] = 'eth0';
$kea_conf['Dhcp4']['interfaces-config']['interfaces'][] = 'wlan0';

# Aendere das subnet der id:1 auf 10.101.207.0/24
var_dump($kea_conf['Dhcp4']);
# Passe alle weiteren values des subnet an um den Umzug ins 10-er Netz abzuschliessen
# Der Router und der DNS haben weiterhin die letzte mögliche adresse
# Aendere  ddns-qualifying-suffix, domain-name und domain-search zu sander.zz








//
$kea_dhcp4 = file_get_contents("../kea-dhcp4.conf");
$kea_dhcp4 = json_decode($kea_dhcp4,true);
var_dump($kea_dhcp4);
$kea_dhcp4['Dhcp4']['subnet4'][0]['subnet'] = '10.101.207.0/24';
$kea_dhcp4['Dhcp4']['subnet4'][0]['pools'][0]['pool'] = '10.101.207.10-10.101.207.200';
$kea_dhcp4['Dhcp4']['subnet4'][0]["option-data"][0]['data'] = '10.101.207.254';
$kea_dhcp4['Dhcp4']['subnet4'][0]["option-data"][1]['data'] = '10.101.207.254';
$kea_dhcp4['Dhcp4']['subnet4'][0]["option-data"][2]['data'] = 'sander.zz';
$kea_dhcp4['Dhcp4']['subnet4'][0]["option-data"][3]['data'] = 'sander.zz';
$kea_dhcp4['Dhcp4']["ddns-qualifying-suffix"] = 'sander.zz';





$file = fopen('../newkea.json','w') or die('Fehler');
fwrite($file,json_encode($kea_dhcp4));
fclose($file);