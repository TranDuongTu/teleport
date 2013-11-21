
/** Airline indexes **/
db.getCollection("Airline").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** Airport indexes **/
db.getCollection("Airport").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** Flight indexes **/
db.getCollection("Flight").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** Nation indexes **/
db.getCollection("Nation").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** Stop indexes **/
db.getCollection("Stop").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** Subscriber indexes **/
db.getCollection("Subscriber").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** Ticket indexes **/
db.getCollection("Ticket").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** Airline records **/
db.getCollection("Airline").insert({
  "_id": ObjectId("527df8a5b44e5f0419000054"),
  "name": "US Airways",
  "nation": ObjectId("527df782b44e5f7415000035"),
  "reputation": NumberInt(4)
});
db.getCollection("Airline").insert({
  "_id": ObjectId("527df2e5b44e5f7415000034"),
  "name": "VietJet Air",
  "nation": ObjectId("527d2e43b44e5fe01d00002a"),
  "reputation": NumberInt(3)
});
db.getCollection("Airline").insert({
  "_id": ObjectId("527df2aeb44e5f7415000032"),
  "name": "Vietname Airlines",
  "nation": ObjectId("527d2e43b44e5fe01d00002a"),
  "reputation": NumberInt(3)
});
db.getCollection("Airline").insert({
  "_id": ObjectId("527df2d6b44e5f7415000033"),
  "name": "Jetstar Pacific Airlines",
  "nation": ObjectId("527d2e43b44e5fe01d00002a"),
  "reputation": NumberInt(3)
});
db.getCollection("Airline").insert({
  "_id": ObjectId("527df952b44e5f4c19000029"),
  "name": "American Airlines",
  "nation": ObjectId("527df782b44e5f7415000035"),
  "reputation": NumberInt(4)
});
db.getCollection("Airline").insert({
  "_id": ObjectId("527dfa25b44e5f4c1900002a"),
  "name": "British Airways",
  "nation": ObjectId("527df790b44e5f7415000036"),
  "reputation": NumberInt(4)
});
db.getCollection("Airline").insert({
  "_id": ObjectId("527dfab5b44e5f4c1900002b"),
  "name": "Air China",
  "nation": ObjectId("527df799b44e5f7415000037"),
  "reputation": NumberInt(3)
});
db.getCollection("Airline").insert({
  "_id": ObjectId("527dfb45b44e5f4c1900002c"),
  "name": "Japan Airlines",
  "nation": ObjectId("527df7a5b44e5f7415000038"),
  "reputation": NumberInt(4)
});
db.getCollection("Airline").insert({
  "_id": ObjectId("527dfb8bb44e5f4c1900002d"),
  "name": "Virgin Australia",
  "nation": ObjectId("527df7adb44e5f7415000039"),
  "reputation": NumberInt(4)
});
db.getCollection("Airline").insert({
  "_id": ObjectId("527dfbcbb44e5f4c1900002e"),
  "name": "Ural Airlines",
  "nation": ObjectId("527df7cab44e5f741500003b"),
  "reputation": NumberInt(4)
});

/** Airport records **/
db.getCollection("Airport").insert({
  "_id": ObjectId("527dfc9bb44e5f5c0f000029"),
  "name": "Ho Chi Minh City",
  "code": "SGN",
  "nation": ObjectId("527d2e43b44e5fe01d00002a"),
  "reputation": NumberInt(3)
});
db.getCollection("Airport").insert({
  "_id": ObjectId("527dfd10b44e5f5c0f00002a"),
  "name": "Ha Noi",
  "code": "HAN",
  "nation": ObjectId("527d2e43b44e5fe01d00002a"),
  "reputation": NumberInt(3)
});
db.getCollection("Airport").insert({
  "_id": ObjectId("527dfe18b44e5f5c0f00002b"),
  "name": "London",
  "code": "LON",
  "nation": ObjectId("527df790b44e5f7415000036"),
  "reputation": NumberInt(4)
});
db.getCollection("Airport").insert({
  "_id": ObjectId("527dfe85b44e5f5c0f00002c"),
  "name": "Melbourne",
  "code": "MEL",
  "nation": ObjectId("527df7adb44e5f7415000039"),
  "reputation": NumberInt(4)
});
db.getCollection("Airport").insert({
  "_id": ObjectId("527dfebfb44e5f5c0f00002d"),
  "name": "Washington",
  "code": "WAS",
  "nation": ObjectId("527df782b44e5f7415000035"),
  "reputation": NumberInt(5)
});
db.getCollection("Airport").insert({
  "_id": ObjectId("527dff02b44e5f5c0f00002e"),
  "name": "Beijing",
  "code": "BJS",
  "nation": ObjectId("527df799b44e5f7415000037"),
  "reputation": NumberInt(4)
});
db.getCollection("Airport").insert({
  "_id": ObjectId("527dff44b44e5f5c0f00002f"),
  "name": "Tokyo",
  "code": "TYO",
  "nation": ObjectId("527df7a5b44e5f7415000038"),
  "reputation": NumberInt(4)
});
db.getCollection("Airport").insert({
  "_id": ObjectId("527dffa9b44e5f5c0f000030"),
  "name": "Moscow",
  "code": "MOW",
  "nation": ObjectId("527df7cab44e5f741500003b"),
  "reputation": NumberInt(4)
});
db.getCollection("Airport").insert({
  "_id": ObjectId("527e000db44e5f5c0f000031"),
  "name": "Rome",
  "code": "ROM",
  "nation": ObjectId("527df7f0b44e5f741500003d"),
  "reputation": NumberInt(3)
});
db.getCollection("Airport").insert({
  "_id": ObjectId("527e009bb44e5f5c0f000032"),
  "name": "Mumbai",
  "code": "BOM",
  "nation": ObjectId("527df7dab44e5f741500003c"),
  "reputation": NumberInt(3)
});

/** Flight records **/
db.getCollection("Flight").insert({
  "_id": ObjectId("527e6551b44e5f0419000055"),
  "airline": ObjectId("527df2d6b44e5f7415000033"),
  "from": ObjectId("527dfc9bb44e5f5c0f000029"),
  "to": ObjectId("527dfd10b44e5f5c0f00002a"),
  "time": ISODate("2013-11-10T18:30:00.0Z")
});
db.getCollection("Flight").insert({
  "_id": ObjectId("527e6ac1b44e5f0419000057"),
  "airline": ObjectId("527df2aeb44e5f7415000032"),
  "from": ObjectId("527dfc9bb44e5f5c0f000029"),
  "to": ObjectId("527dfd10b44e5f5c0f00002a"),
  "time": ISODate("2013-11-10T05:30:00.0Z")
});
db.getCollection("Flight").insert({
  "_id": ObjectId("528d44613f4b10e01400002b"),
  "airline": ObjectId("527dfa25b44e5f4c1900002a"),
  "from": ObjectId("527e000db44e5f5c0f000031"),
  "to": ObjectId("527dffa9b44e5f5c0f000030"),
  "time": ISODate("2013-11-20T23:23:13.891Z")
});
db.getCollection("Flight").insert({
  "_id": ObjectId("528d44bb3f4b109015000029"),
  "airline": ObjectId("527dfab5b44e5f4c1900002b"),
  "from": ObjectId("527dff02b44e5f5c0f00002e"),
  "to": ObjectId("527dff44b44e5f5c0f00002f"),
  "time": ISODate("2013-11-20T23:24:43.622Z")
});

/** Nation records **/
db.getCollection("Nation").insert({
  "_id": ObjectId("527d2e43b44e5fe01d00002a"),
  "name": "Vietnam"
});
db.getCollection("Nation").insert({
  "_id": ObjectId("527df782b44e5f7415000035"),
  "name": "United States"
});
db.getCollection("Nation").insert({
  "_id": ObjectId("527df790b44e5f7415000036"),
  "name": "England"
});
db.getCollection("Nation").insert({
  "_id": ObjectId("527df799b44e5f7415000037"),
  "name": "China"
});
db.getCollection("Nation").insert({
  "_id": ObjectId("527df7a5b44e5f7415000038"),
  "name": "Japan"
});
db.getCollection("Nation").insert({
  "_id": ObjectId("527df7adb44e5f7415000039"),
  "name": "Australia"
});
db.getCollection("Nation").insert({
  "_id": ObjectId("527df7c0b44e5f741500003a"),
  "name": "Egypt"
});
db.getCollection("Nation").insert({
  "_id": ObjectId("527df7cab44e5f741500003b"),
  "name": "Russia"
});
db.getCollection("Nation").insert({
  "_id": ObjectId("527df7dab44e5f741500003c"),
  "name": "India"
});
db.getCollection("Nation").insert({
  "_id": ObjectId("527df7f0b44e5f741500003d"),
  "name": "Italy"
});

/** Stop records **/
db.getCollection("Stop").insert({
  "_id": ObjectId("528d439e3f4b10e014000029"),
  "airport": ObjectId("527e009bb44e5f5c0f000032"),
  "flight": ObjectId("527e6ac1b44e5f0419000057"),
  "order": NumberInt(1)
});
db.getCollection("Stop").insert({
  "_id": ObjectId("528d43e73f4b10e01400002a"),
  "airport": ObjectId("527e000db44e5f5c0f000031"),
  "flight": ObjectId("527e6ac1b44e5f0419000057"),
  "order": NumberInt(2)
});
db.getCollection("Stop").insert({
  "_id": ObjectId("528d45243f4b10901500002a"),
  "flight": ObjectId("528d44bb3f4b109015000029"),
  "order": NumberInt(1),
  "airport": ObjectId("527e009bb44e5f5c0f000032")
});
db.getCollection("Stop").insert({
  "_id": ObjectId("528d457f3f4b10901500002b"),
  "flight": ObjectId("528d44613f4b10e01400002b"),
  "order": NumberInt(1),
  "airport": ObjectId("527dfe18b44e5f5c0f00002b")
});

/** Subscriber records **/
db.getCollection("Subscriber").insert({
  "_id": ObjectId("527ca107b44e5fcc1d000029"),
  "email": "test",
  "state": "0",
  "test": 5
});

/** Ticket records **/
db.getCollection("Ticket").insert({
  "_id": ObjectId("527e68cbb44e5f0419000056"),
  "flight": ObjectId("527e6551b44e5f0419000055"),
  "type": 0,
  "price": 3039000
});
db.getCollection("Ticket").insert({
  "_id": ObjectId("527e6b7db44e5f0419000058"),
  "flight": ObjectId("527e6ac1b44e5f0419000057"),
  "type": 0,
  "price": 20590387
});
db.getCollection("Ticket").insert({
  "_id": ObjectId("528d490a3f4b10901500002c"),
  "flight": ObjectId("528d44bb3f4b109015000029"),
  "price": NumberInt(5000000),
  "type": 1
});
db.getCollection("Ticket").insert({
  "_id": ObjectId("528d49203f4b10901500002d"),
  "flight": ObjectId("528d44bb3f4b109015000029"),
  "price": NumberInt(7000000),
  "type": 0
});
db.getCollection("Ticket").insert({
  "_id": ObjectId("528d49463f4b10901500002e"),
  "flight": ObjectId("528d44613f4b10e01400002b"),
  "price": NumberInt(6500000),
  "type": 0
});
db.getCollection("Ticket").insert({
  "_id": ObjectId("528d496e3f4b10901500002f"),
  "flight": ObjectId("528d44613f4b10e01400002b"),
  "price": NumberInt(4000000),
  "type": 0
});

/** system.indexes records **/
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "ns": "teleport.flight",
  "name": "_id_"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "ns": "teleport.airspot",
  "name": "_id_"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "ns": "teleport.Airline",
  "name": "_id_"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "ns": "teleport.Airport",
  "name": "_id_"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "ns": "teleport.Flight",
  "name": "_id_"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "ns": "teleport.Nation",
  "name": "_id_"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "ns": "teleport.Stop",
  "name": "_id_"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "ns": "teleport.Subscriber",
  "name": "_id_"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "ns": "teleport.Ticket",
  "name": "_id_"
});
