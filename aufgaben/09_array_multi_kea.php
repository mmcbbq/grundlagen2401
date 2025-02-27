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
# lese den lease-database type aus.
# Aendere die "valid-lifetime" auf 5000,
# Aendere die "max-valid-lifetime" auf 10000,
# Fuege den Interfaces array die werte wlan0 und eth1 hinzu

# Aendere das subnet der id:1 auf 10.101.207.0/24
# Passe alle weiteren values des subnet an um den Umzug ins 10-er Netz abzuschliessen
# Der Router und der DNS haben weiterhin die letzte mögliche adresse
# Aendere  ddns-qualifying-suffix, domain-name und domain-search zu sander.zz
