<?php

namespace Database\Seeders;

use App\Models\Report;
use App\Models\ReportType;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
              "dateCommitted"=> "2017-05-03",
              "reason"=> "Parking Lot Accident",
              "severity"=> "Moderate",
              "latitude"=> 15.022135,
              "longitude"=> 120.517509,
              "recommendation"=> "Drive cautiously in parking lots, observe posted speed limits, and be mindful of pedestrians and other vehicles in crowded areas."
            ],
            [
              "dateCommitted"=> "2017-05-04",
              "reason"=> "T Bone Intersection Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.967374,
              "longitude"=> 120.49691,
              "recommendation"=> "Drivers should obey traffic signals and stop signs, approach intersections with caution, and double-check for oncoming traffic before proceeding."
            ],
            [
              "dateCommitted"=> "2017-05-07",
              "reason"=> "Parking Lot Accident",
              "severity"=> "Moderate",
              "latitude"=> 14.935448,
              "longitude"=> 120.493004,
              "recommendation"=> "Drive cautiously in parking lots, observe posted speed limits, and be mindful of pedestrians and other vehicles in crowded areas."
            ],
            [
              "dateCommitted"=> "2017-05-11",
              "reason"=> "Distracted Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.967084,
              "longitude"=> 120.496651,
              "recommendation"=> "Avoid distractions while driving, such as using mobile phones, eating, or adjusting the radio, and stay focused on the road at all times."
            ],
            [
              "dateCommitted"=> "2017-05-11",
              "reason"=> "T Bone Intersection Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.988724,
              "longitude"=> 120.538368,
              "recommendation"=> "Drivers should obey traffic signals and stop signs, approach intersections with caution, and double-check for oncoming traffic before proceeding."
            ],
            [
              "dateCommitted"=> "2017-05-16",
              "reason"=> "Truck Brake Failure",
              "severity"=> "Serious",
              "latitude"=> 14.933333,
              "longitude"=> 120.5,
              "recommendation"=> "Regularly inspect and maintain the braking system of commercial vehicles, ensuring they are in proper working condition, and drivers should be trained to respond appropriately in case of brake failure emergencies."
            ],
            [
              "dateCommitted"=> "2017-05-18",
              "reason"=> "Parking Lot Accident",
              "severity"=> "Moderate",
              "latitude"=> 14.964969,
              "longitude"=> 120.495583,
              "recommendation"=> "Drive cautiously in parking lots, observe posted speed limits, and be mindful of pedestrians and other vehicles in crowded areas."
            ],
            [
              "dateCommitted"=> "2017-05-19",
              "reason"=> "Drowsy Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.994238,
              "longitude"=> 120.501976,
              "recommendation"=> "Get sufficient rest before long journeys, take regular breaks during extended drives, and avoid driving during peak drowsy hours (late at night or early morning) to prevent accidents caused by driver fatigue."
            ],
            [
              "dateCommitted"=> "2017-05-22",
              "reason"=> "Cyclist Hit by Turning Vehicle",
              "severity"=> "Minor",
              "latitude"=> 14.979977,
              "longitude"=> 120.516609,
              "recommendation"=> "Always check your blind spots before turning, yield to cyclists and pedestrians, and signal your intentions clearly to other road users."
            ],
            [
              "dateCommitted"=> "2017-07-12",
              "reason"=> "Side Mirror Scraping",
              "severity"=> "Serious",
              "latitude"=> 14.966752,
              "longitude"=> 120.525406,
              "recommendation"=> "Be cautious when passing parked cars or tight spaces, keeping a safe distance from obstacles to avoid side mirror collisions."
            ],
            [
              "dateCommitted"=> "2017-07-14",
              "reason"=> "Rear End Collision",
              "severity"=> "Serious",
              "latitude"=> 14.979272,
              "longitude"=> 120.517426,
              "recommendation"=> "Maintain a safe following distance from the vehicle ahead and be attentive to sudden stops, brake early and gradually when necessary."
            ],
            [
              "dateCommitted"=> "2017-07-15",
              "reason"=> "Tricycle Overturns on a Rural Road Due to Excessive Speed",
              "severity"=> "Minor",
              "latitude"=> 14.995689,
              "longitude"=> 120.501076,
              "recommendation"=> "Tricycle drivers should observe speed limits and drive at a safe speed, especially on rural roads. Passengers should also encourage responsible driving behavior. Overloading tricycles with passengers or goods can also contribute to accidents, so adhere to weight limits."
            ],
            [
              "dateCommitted"=> "2017-07-17",
              "reason"=> "Motorcycle Collides with Pedestrian at a Zebra Crossing",
              "severity"=> "Moderate",
              "latitude"=> 14.976329,
              "longitude"=> 120.533302,
              "recommendation"=> "Both motorcyclists and pedestrians should be aware of their surroundings. Motorcyclists should slow down near pedestrian crossings and yield the right of way. Pedestrians should only cross at designated crossings and look both ways before crossing."
            ],
            [
              "dateCommitted"=> "2017-07-19",
              "reason"=> "Jeepney Brake Failure",
              "severity"=> "Fatal",
              "latitude"=> 14.989802,
              "longitude"=> 120.538193,
              "recommendation"=> "Regular maintenance is crucial for public transportation vehicles like jeepneys. Properly inspect and service brakes to prevent failures. Drivers should maintain a safe following distance and drive at a speed that allows them to stop in time."
            ],
            [
              "dateCommitted"=> "2017-07-20",
              "reason"=> "Motorcycle Collides with Pedestrian at a Zebra Crossing",
              "severity"=> "Moderate",
              "latitude"=> 14.987812,
              "longitude"=> 120.508759,
              "recommendation"=> "Both motorcyclists and pedestrians should be aware of their surroundings. Motorcyclists should slow down near pedestrian crossings and yield the right of way. Pedestrians should only cross at designated crossings and look both ways before crossing."
            ],
            [
              "dateCommitted"=> "2017-07-29",
              "reason"=> "Parking Lot Accident",
              "severity"=> "Moderate",
              "latitude"=> 14.974919,
              "longitude"=> 120.52446,
              "recommendation"=> "Drive cautiously in parking lots, observe posted speed limits, and be mindful of pedestrians and other vehicles in crowded areas."
            ],
            [
              "dateCommitted"=> "2017-07-30",
              "reason"=> "Jeepney Brake Failure",
              "severity"=> "Fatal",
              "latitude"=> 14.973883,
              "longitude"=> 120.529823,
              "recommendation"=> "Regular maintenance is crucial for public transportation vehicles like jeepneys. Properly inspect and service brakes to prevent failures. Drivers should maintain a safe following distance and drive at a speed that allows them to stop in time."
            ],
            [
              "dateCommitted"=> "2017-07-31",
              "reason"=> "Hydroplaning Accident",
              "severity"=> "Serious",
              "latitude"=> 14.975044,
              "longitude"=> 120.525879,
              "recommendation"=> "Drive at reduced speeds during rainy conditions, maintain proper tire tread and inflation, and avoid sudden maneuvers on wet roads to prevent hydroplaning accidents."
            ],
            [
              "dateCommitted"=> "2017-08-01",
              "reason"=> "Motorcycle Collides with Pedestrian at a Zebra Crossing",
              "severity"=> "Moderate",
              "latitude"=> 14.977531,
              "longitude"=> 120.520599,
              "recommendation"=> "Both motorcyclists and pedestrians should be aware of their surroundings. Motorcyclists should slow down near pedestrian crossings and yield the right of way. Pedestrians should only cross at designated crossings and look both ways before crossing."
            ],
            [
              "dateCommitted"=> "2017-08-03",
              "reason"=> "Intersection Collision between a Turning Vehicle and a Cyclist",
              "severity"=> "Serious",
              "latitude"=> 14.97778,
              "longitude"=> 120.519485,
              "recommendation"=> "Both drivers and cyclists should exercise caution at intersections. Drivers must check their blind spots and use their turn signals well in advance of turning. Cyclists should use hand signals to indicate their intentions and make eye contact with drivers to ensure theyre seen. Always be mindful of each others presence when sharing the road."
            ],
            [
              "dateCommitted"=> "2017-08-05",
              "reason"=> "Merge Lane Collision",
              "severity"=> "Serious",
              "latitude"=> 14.943326,
              "longitude"=> 120.508881,
              "recommendation"=> "Yield to traffic already on the main road when merging, use turn signals to indicate intentions, and communicate with other drivers to safely merge into traffic."
            ],
            [
              "dateCommitted"=> "2017-08-12",
              "reason"=> "Head On Collision",
              "severity"=> "Fatal",
              "latitude"=> 14.976495,
              "longitude"=> 120.527168,
              "recommendation"=> "Always stay in your lane and avoid overtaking in no-passing zones, maintain a safe following distance, and adhere to traffic signs and signals."
            ],
            [
              "dateCommitted"=> "2017-08-17",
              "reason"=> "Jeepney Brake Failure",
              "severity"=> "Serious",
              "latitude"=> 14.988268,
              "longitude"=> 120.509613,
              "recommendation"=> "Regular maintenance is crucial for public transportation vehicles like jeepneys. Properly inspect and service brakes to prevent failures. Drivers should maintain a safe following distance and drive at a speed that allows them to stop in time."
            ],
            [
              "dateCommitted"=> "2017-08-19",
              "reason"=> "Wrong Way Driving on Highway",
              "severity"=> "Moderate",
              "latitude"=> 15.022715,
              "longitude"=> 120.517342,
              "recommendation"=> "Pay close attention to road signs, especially those indicating one-way streets or highway entrances, and refrain from driving under the influence of alcohol or drugs to prevent wrong-way accidents."
            ],
            [
              "dateCommitted"=> "2017-08-26",
              "reason"=> "Biker Skids on Wet Leaves and Falls on a Rainy Day",
              "severity"=> "Fatal",
              "latitude"=> 14.97807,
              "longitude"=> 120.531883,
              "recommendation"=> "During wet and rainy conditions, be cautious when riding over surfaces covered in leaves or other debris. Leaves can become slippery, reducing traction. Slow down and avoid sudden maneuvers. Also, ensure your bikes tires have sufficient tread for improved grip on wet roads."
            ],
            [
              "dateCommitted"=> "2017-08-28",
              "reason"=> "Wrong Way Driving on Highway",
              "severity"=> "Moderate",
              "latitude"=> 14.979293,
              "longitude"=> 120.519829,
              "recommendation"=> "Pay close attention to road signs, especially those indicating one-way streets or highway entrances, and refrain from driving under the influence of alcohol or drugs to prevent wrong-way accidents."
            ],
            [
              "dateCommitted"=> "2017-08-28",
              "reason"=> "Distracted Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.974836,
              "longitude"=> 120.524765,
              "recommendation"=> "Avoid distractions while driving, such as using mobile phones, eating, or adjusting the radio, and stay focused on the road at all times."
            ],
            [
              "dateCommitted"=> "2017-08-28",
              "reason"=> "Wrong Way Driving on Highway",
              "severity"=> "Moderate",
              "latitude"=> 14.968576,
              "longitude"=> 120.526566,
              "recommendation"=> "Pay close attention to road signs, especially those indicating one-way streets or highway entrances, and refrain from driving under the influence of alcohol or drugs to prevent wrong-way accidents."
            ],
            [
              "dateCommitted"=> "2017-08-30",
              "reason"=> "Cyclist Hit by Turning Vehicle",
              "severity"=> "Minor",
              "latitude"=> 14.918032,
              "longitude"=> 120.492661,
              "recommendation"=> "Always check your blind spots before turning, yield to cyclists and pedestrians, and signal your intentions clearly to other road users."
            ],
            [
              "dateCommitted"=> "2017-09-08",
              "reason"=> "Fender Bender in Heavy Traffic",
              "severity"=> "Serious",
              "latitude"=> 14.974422,
              "longitude"=> 120.483177,
              "recommendation"=> "Increase following distance in congested traffic, avoid tailgating, and drive at a reasonable speed to minimize the risk of minor rear-end collisions."
            ],
            [
              "dateCommitted"=> "2017-09-11",
              "reason"=> "Wrong Way Driving on Highway",
              "severity"=> "Moderate",
              "latitude"=> 14.972763,
              "longitude"=> 120.489746,
              "recommendation"=> "Pay close attention to road signs, especially those indicating one-way streets or highway entrances, and refrain from driving under the influence of alcohol or drugs to prevent wrong-way accidents."
            ],
            [
              "dateCommitted"=> "2017-09-14",
              "reason"=> "Fender Bender in Heavy Traffic",
              "severity"=> "Serious",
              "latitude"=> 14.980433,
              "longitude"=> 120.536049,
              "recommendation"=> "Increase following distance in congested traffic, avoid tailgating, and drive at a reasonable speed to minimize the risk of minor rear-end collisions."
            ],
            [
              "dateCommitted"=> "2017-09-14",
              "reason"=> "T Bone Intersection Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.993782,
              "longitude"=> 120.513306,
              "recommendation"=> "Drivers should obey traffic signals and stop signs, approach intersections with caution, and double-check for oncoming traffic before proceeding."
            ],
            [
              "dateCommitted"=> "2017-09-16",
              "reason"=> "Head On Collision",
              "severity"=> "Fatal",
              "latitude"=> 14.976329,
              "longitude"=> 120.526566,
              "recommendation"=> "Always stay in your lane and avoid overtaking in no-passing zones, maintain a safe following distance, and adhere to traffic signs and signals."
            ],
            [
              "dateCommitted"=> "2017-09-17",
              "reason"=> "Rollover Crash on Curvy Road",
              "severity"=> "Minor",
              "latitude"=> 14.972225,
              "longitude"=> 120.534416,
              "recommendation"=> "Reduce speed on sharp curves, avoid sudden steering maneuvers, and ensure proper vehicle maintenance, including tire condition and suspension, to prevent rollover accidents."
            ],
            [
              "dateCommitted"=> "2017-09-18",
              "reason"=> "Motorcycle Collides with Pedestrian at a Zebra Crossing",
              "severity"=> "Moderate",
              "latitude"=> 14.981304,
              "longitude"=> 120.505196,
              "recommendation"=> "Both motorcyclists and pedestrians should be aware of their surroundings. Motorcyclists should slow down near pedestrian crossings and yield the right of way. Pedestrians should only cross at designated crossings and look both ways before crossing."
            ],
            [
              "dateCommitted"=> "2017-09-24",
              "reason"=> "Jeepney Brake Failure",
              "severity"=> "Serious",
              "latitude"=> 15.01343,
              "longitude"=> 120.516479,
              "recommendation"=> "Regular maintenance is crucial for public transportation vehicles like jeepneys. Properly inspect and service brakes to prevent failures. Drivers should maintain a safe following distance and drive at a speed that allows them to stop in time."
            ],
            [
              "dateCommitted"=> "2017-09-24",
              "reason"=> "T Bone Intersection Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.966296,
              "longitude"=> 120.496391,
              "recommendation"=> "Drivers should obey traffic signals and stop signs, approach intersections with caution, and double-check for oncoming traffic before proceeding."
            ],
            [
              "dateCommitted"=> "2017-09-29",
              "reason"=> "Sudden Lane Change Collision",
              "severity"=> "Serious",
              "latitude"=> 14.974671,
              "longitude"=> 120.500984,
              "recommendation"=> "Always use turn signals to indicate lane changes, check blind spots, and be cautious of other drivers when merging or changing lanes, maintaining a safe distance."
            ],
            [
              "dateCommitted"=> "2017-10-04",
              "reason"=> "Merge Lane Collision",
              "severity"=> "Serious",
              "latitude"=> 14.985076,
              "longitude"=> 120.507637,
              "recommendation"=> "Yield to traffic already on the main road when merging, use turn signals to indicate intentions, and communicate with other drivers to safely merge into traffic."
            ],
            [
              "dateCommitted"=> "2017-10-09",
              "reason"=> "Wrong Way Driving on Highway",
              "severity"=> "Moderate",
              "latitude"=> 14.979936,
              "longitude"=> 120.516823,
              "recommendation"=> "Pay close attention to road signs, especially those indicating one-way streets or highway entrances, and refrain from driving under the influence of alcohol or drugs to prevent wrong-way accidents."
            ],
            [
              "dateCommitted"=> "2017-10-16",
              "reason"=> "Biker Skids on Wet Leaves and Falls on a Rainy Day",
              "severity"=> "Fatal",
              "latitude"=> 14.983542,
              "longitude"=> 120.528625,
              "recommendation"=> "During wet and rainy conditions, be cautious when riding over surfaces covered in leaves or other debris. Leaves can become slippery, reducing traction. Slow down and avoid sudden maneuvers. Also, ensure your bikes tires have sufficient tread for improved grip on wet roads."
            ],
            [
              "dateCommitted"=> "2017-10-29",
              "reason"=> "Head On Collision",
              "severity"=> "Fatal",
              "latitude"=> 14.977282,
              "longitude"=> 120.52021,
              "recommendation"=> "Always stay in your lane and avoid overtaking in no-passing zones, maintain a safe following distance, and adhere to traffic signs and signals."
            ],
            [
              "dateCommitted"=> "2017-10-27",
              "reason"=> "Intersection Collision between a Turning Vehicle and a Cyclist",
              "severity"=> "Serious",
              "latitude"=> 14.963021,
              "longitude"=> 120.495193,
              "recommendation"=> "Both drivers and cyclists should exercise caution at intersections. Drivers must check their blind spots and use their turn signals well in advance of turning. Cyclists should use hand signals to indicate their intentions and make eye contact with drivers to ensure theyre seen. Always be mindful of each others presence when sharing the road."
            ],
            [
              "dateCommitted"=> "2017-10-31",
              "reason"=> "T Bone Intersection Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.979065,
              "longitude"=> 120.535103,
              "recommendation"=> "Drivers should obey traffic signals and stop signs, approach intersections with caution, and double-check for oncoming traffic before proceeding."
            ],
            [
              "dateCommitted"=> "2017-11-01",
              "reason"=> "Tricycle Overturns on a Rural Road Due to Excessive Speed",
              "severity"=> "Minor",
              "latitude"=> 14.992372,
              "longitude"=> 120.51223,
              "recommendation"=> "Tricycle drivers should observe speed limits and drive at a safe speed, especially on rural roads. Passengers should also encourage responsible driving behavior. Overloading tricycles with passengers or goods can also contribute to accidents, so adhere to weight limits."
            ],
            [
              "dateCommitted"=> "2017-11-04",
              "reason"=> "Sudden Lane Change Collision",
              "severity"=> "Serious",
              "latitude"=> 14.987771,
              "longitude"=> 120.509224,
              "recommendation"=> "Always use turn signals to indicate lane changes, check blind spots, and be cautious of other drivers when merging or changing lanes, maintaining a safe distance."
            ],
            [
              "dateCommitted"=> "2017-11-04",
              "reason"=> "Parking Lot Accident",
              "severity"=> "Moderate",
              "latitude"=> 14.971437,
              "longitude"=> 120.494034,
              "recommendation"=> "Drive cautiously in parking lots, observe posted speed limits, and be mindful of pedestrians and other vehicles in crowded areas."
            ],
            [
              "dateCommitted"=> "2017-11-07",
              "reason"=> "Truck Brake Failure",
              "severity"=> "Minor",
              "latitude"=> 14.993077,
              "longitude"=> 120.503174,
              "recommendation"=> "Regularly inspect and maintain the braking system of commercial vehicles, ensuring they are in proper working condition, and drivers should be trained to respond appropriately in case of brake failure emergencies."
            ],
            [
              "dateCommitted"=> "2017-11-07",
              "reason"=> "Drowsy Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.972743,
              "longitude"=> 120.527512,
              "recommendation"=> "Get sufficient rest before long journeys, take regular breaks during extended drives, and avoid driving during peak drowsy hours (late at night or early morning) to prevent accidents caused by driver fatigue."
            ],
            [
              "dateCommitted"=> "2017-11-07",
              "reason"=> "Distracted Driving Crash",
              "severity"=> "Serious",
              "latitude"=> 15.001036,
              "longitude"=> 120.533089,
              "recommendation"=> "Avoid distractions while driving, such as using mobile phones, eating, or adjusting the radio, and stay focused on the road at all times."
            ],
            [
              "dateCommitted"=> "2017-11-10",
              "reason"=> "Motorcycle Collides with Pedestrian at a Zebra Crossing",
              "severity"=> "Moderate",
              "latitude"=> 15.015337,
              "longitude"=> 120.51622,
              "recommendation"=> "Both motorcyclists and pedestrians should be aware of their surroundings. Motorcyclists should slow down near pedestrian crossings and yield the right of way. Pedestrians should only cross at designated crossings and look both ways before crossing."
            ],
            [
              "dateCommitted"=> "2017-11-22",
              "reason"=> "Head On Collision",
              "severity"=> "Fatal",
              "latitude"=> 14.984579,
              "longitude"=> 120.528496,
              "recommendation"=> "Always stay in your lane and avoid overtaking in no-passing zones, maintain a safe following distance, and adhere to traffic signs and signals."
            ],
            [
              "dateCommitted"=> "2017-11-25",
              "reason"=> "Distracted Driving Crash",
              "severity"=> "Serious",
              "latitude"=> 14.978236,
              "longitude"=> 120.518837,
              "recommendation"=> "Avoid distractions while driving, such as using mobile phones, eating, or adjusting the radio, and stay focused on the road at all times."
            ],
            [
              "dateCommitted"=> "2017-11-27",
              "reason"=> "Rollover Crash on Curvy Road",
              "severity"=> "Minor",
              "latitude"=> 14.974629,
              "longitude"=> 120.443398,
              "recommendation"=> "Reduce speed on sharp curves, avoid sudden steering maneuvers, and ensure proper vehicle maintenance, including tire condition and suspension, to prevent rollover accidents."
            ],
            [
              "dateCommitted"=> "2017-11-28",
              "reason"=> "Merge Lane Collision",
              "severity"=> "Serious",
              "latitude"=> 14.977407,
              "longitude"=> 120.502792,
              "recommendation"=> "Yield to traffic already on the main road when merging, use turn signals to indicate intentions, and communicate with other drivers to safely merge into traffic."
            ],
            [
              "dateCommitted"=> "2017-11-30",
              "reason"=> "Tricycle Overturns on a Rural Road Due to Excessive Speed",
              "severity"=> "Minor",
              "latitude"=> 14.980267,
              "longitude"=> 120.536224,
              "recommendation"=> "Tricycle drivers should observe speed limits and drive at a safe speed, especially on rural roads. Passengers should also encourage responsible driving behavior. Overloading tricycles with passengers or goods can also contribute to accidents, so adhere to weight limits."
            ],
            [
              "dateCommitted"=> "2017-12-01",
              "reason"=> "Head On Collision",
              "severity"=> "Fatal",
              "latitude"=> 14.962108,
              "longitude"=> 120.494675,
              "recommendation"=> "Always stay in your lane and avoid overtaking in no-passing zones, maintain a safe following distance, and adhere to traffic signs and signals."
            ],
            [
              "dateCommitted"=> "2017-12-05",
              "reason"=> "Motorcycle Collides with Pedestrian at a Zebra Crossing",
              "severity"=> "Moderate",
              "latitude"=> 14.974795,
              "longitude"=> 120.526436,
              "recommendation"=> "Both motorcyclists and pedestrians should be aware of their surroundings. Motorcyclists should slow down near pedestrian crossings and yield the right of way. Pedestrians should only cross at designated crossings and look both ways before crossing."
            ],
            [
              "dateCommitted"=> "2017-12-07",
              "reason"=> "Motorcycle Collides with Pedestrian at a Zebra Crossing",
              "severity"=> "Moderate",
              "latitude"=> 14.93524,
              "longitude"=> 120.494675,
              "recommendation"=> "Both motorcyclists and pedestrians should be aware of their surroundings. Motorcyclists should slow down near pedestrian crossings and yield the right of way. Pedestrians should only cross at designated crossings and look both ways before crossing."
            ],
            [
              "dateCommitted"=> "2017-12-10",
              "reason"=> "Wrong Way Driving on Highway",
              "severity"=> "Moderate",
              "latitude"=> 14.981843,
              "longitude"=> 120.505577,
              "recommendation"=> "Pay close attention to road signs, especially those indicating one-way streets or highway entrances, and refrain from driving under the influence of alcohol or drugs to prevent wrong-way accidents."
            ],
            [
              "dateCommitted"=> "2017-12-12",
              "reason"=> "Fender Bender in Heavy Traffic",
              "severity"=> "Serious",
              "latitude"=> 14.966835,
              "longitude"=> 120.496696,
              "recommendation"=> "Increase following distance in congested traffic, avoid tailgating, and drive at a reasonable speed to minimize the risk of minor rear-end collisions."
            ],
            [
              "dateCommitted"=> "2017-12-12",
              "reason"=> "T Bone Intersection Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.980184,
              "longitude"=> 120.516823,
              "recommendation"=> "Drivers should obey traffic signals and stop signs, approach intersections with caution, and double-check for oncoming traffic before proceeding."
            ],
            [
              "dateCommitted"=> "2017-12-16",
              "reason"=> "Cyclist Hit by Turning Vehicle",
              "severity"=> "Minor",
              "latitude"=> 14.936111,
              "longitude"=> 120.491158,
              "recommendation"=> "Always check your blind spots before turning, yield to cyclists and pedestrians, and signal your intentions clearly to other road users."
            ],
            [
              "dateCommitted"=> "2017-12-19",
              "reason"=> "Distracted Driving Crash",
              "severity"=> "Serious",
              "latitude"=> 14.916663,
              "longitude"=> 120.478973,
              "recommendation"=> "Avoid distractions while driving, such as using mobile phones, eating, or adjusting the radio, and stay focused on the road at all times."
            ],
            [
              "dateCommitted"=> "2017-12-21",
              "reason"=> "Intersection Collision between a Turning Vehicle and a Cyclist",
              "severity"=> "Serious",
              "latitude"=> 14.983563,
              "longitude"=> 120.52858,
              "recommendation"=> "Both drivers and cyclists should exercise caution at intersections. Drivers must check their blind spots and use their turn signals well in advance of turning. Cyclists should use hand signals to indicate their intentions and make eye contact with drivers to ensure theyre seen. Always be mindful of each others presence when sharing the road."
            ],
            [
              "dateCommitted"=> "2017-12-23",
              "reason"=> "Rollover Crash on Curvy Road",
              "severity"=> "Moderate",
              "latitude"=> 14.935489,
              "longitude"=> 120.49176,
              "recommendation"=> "Reduce speed on sharp curves, avoid sudden steering maneuvers, and ensure proper vehicle maintenance, including tire condition and suspension, to prevent rollover accidents."
            ],
            [
              "dateCommitted"=> "2017-12-24",
              "reason"=> "Truck Brake Failure",
              "severity"=> "Serious",
              "latitude"=> 14.992455,
              "longitude"=> 120.512619,
              "recommendation"=> "Regularly inspect and maintain the braking system of commercial vehicles, ensuring they are in proper working condition, and drivers should be trained to respond appropriately in case of brake failure emergencies."
            ],
            [
              "dateCommitted"=> "2017-12-25",
              "reason"=> "Wrong Way Driving on Highway",
              "severity"=> "Moderate",
              "latitude"=> 14.978775,
              "longitude"=> 120.534889,
              "recommendation"=> "Pay close attention to road signs, especially those indicating one-way streets or highway entrances, and refrain from driving under the influence of alcohol or drugs to prevent wrong-way accidents."
            ],
            [
              "dateCommitted"=> "2017-12-25",
              "reason"=> "Head On Collision",
              "severity"=> "Fatal",
              "latitude"=> 14.971893,
              "longitude"=> 120.49305,
              "recommendation"=> "Always stay in your lane and avoid overtaking in no-passing zones, maintain a safe following distance, and adhere to traffic signs and signals."
            ],
            [
              "dateCommitted"=> "2017-12-30",
              "reason"=> "Parking Lot Accident",
              "severity"=> "Moderate",
              "latitude"=> 14.973831,
              "longitude"=> 120.527809,
              "recommendation"=> "Drive cautiously in parking lots, observe posted speed limits, and be mindful of pedestrians and other vehicles in crowded areas."
            ],
            [
              "dateCommitted"=> "2018-01-13",
              "reason"=> "Hydroplaning Accident",
              "severity"=> "Serious",
              "latitude"=> 14.972556,
              "longitude"=> 120.530899,
              "recommendation"=> "Drive at reduced speeds during rainy conditions, maintain proper tire tread and inflation, and avoid sudden maneuvers on wet roads to prevent hydroplaning accidents."
            ],
            [
              "dateCommitted"=> "2018-01-13",
              "reason"=> "Rear End Collision",
              "severity"=> "Moderate",
              "latitude"=> 14.964637,
              "longitude"=> 120.525749,
              "recommendation"=> "Maintain a safe following distance from the vehicle ahead and be attentive to sudden stops, brake early and gradually when necessary."
            ],
            [
              "dateCommitted"=> "2018-01-15",
              "reason"=> "T Bone Intersection Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.972805,
              "longitude"=> 120.532875,
              "recommendation"=> "Drivers should obey traffic signals and stop signs, approach intersections with caution, and double-check for oncoming traffic before proceeding."
            ],
            [
              "dateCommitted"=> "2018-01-15",
              "reason"=> "Side Mirror Scraping",
              "severity"=> "Fatal",
              "latitude"=> 14.996849,
              "longitude"=> 120.533646,
              "recommendation"=> "Be cautious when passing parked cars or tight spaces, keeping a safe distance from obstacles to avoid side mirror collisions."
            ],
            [
              "dateCommitted"=> "2018-01-22",
              "reason"=> "Hydroplaning Accident",
              "severity"=> "Moderate",
              "latitude"=> 14.979438,
              "longitude"=> 120.517593,
              "recommendation"=> "Drive at reduced speeds during rainy conditions, maintain proper tire tread and inflation, and avoid sudden maneuvers on wet roads to prevent hydroplaning accidents."
            ],
            [
              "dateCommitted"=> "2018-01-26",
              "reason"=> "Distracted Driving Crash",
              "severity"=> "Serious",
              "latitude"=> 14.984081,
              "longitude"=> 120.539139,
              "recommendation"=> "Avoid distractions while driving, such as using mobile phones, eating, or adjusting the radio, and stay focused on the road at all times."
            ],
            [
              "dateCommitted"=> "2018-02-01",
              "reason"=> "Side Mirror Scraping",
              "severity"=> "Serious",
              "latitude"=> 15.002321,
              "longitude"=> 120.49202,
              "recommendation"=> "Be cautious when passing parked cars or tight spaces, keeping a safe distance from obstacles to avoid side mirror collisions."
            ],
            [
              "dateCommitted"=> "2018-04-05",
              "reason"=> "Merge Lane Collision",
              "severity"=> "Serious",
              "latitude"=> 14.974899,
              "longitude"=> 120.526566,
              "recommendation"=> "Yield to traffic already on the main road when merging, use turn signals to indicate intentions, and communicate with other drivers to safely merge into traffic."
            ],
            [
              "dateCommitted"=> "2018-04-05",
              "reason"=> "Distracted Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.972722,
              "longitude"=> 120.53302,
              "recommendation"=> "Avoid distractions while driving, such as using mobile phones, eating, or adjusting the radio, and stay focused on the road at all times."
            ],
            [
              "dateCommitted"=> "2018-04-05",
              "reason"=> "Parking Lot Accident",
              "severity"=> "Moderate",
              "latitude"=> 14.986196,
              "longitude"=> 120.547676,
              "recommendation"=> "Drive cautiously in parking lots, observe posted speed limits, and be mindful of pedestrians and other vehicles in crowded areas."
            ],
            [
              "dateCommitted"=> "2018-04-11",
              "reason"=> "Sudden Lane Change Collision",
              "severity"=> "Serious",
              "latitude"=> 14.921556,
              "longitude"=> 120.478584,
              "recommendation"=> "Always use turn signals to indicate lane changes, check blind spots, and be cautious of other drivers when merging or changing lanes, maintaining a safe distance."
            ],
            [
              "dateCommitted"=> "2018-04-16",
              "reason"=> "Merge Lane Collision",
              "severity"=> "Serious",
              "latitude"=> 14.966296,
              "longitude"=> 120.496223,
              "recommendation"=> "Yield to traffic already on the main road when merging, use turn signals to indicate intentions, and communicate with other drivers to safely merge into traffic."
            ],
            [
              "dateCommitted"=> "2018-04-17",
              "reason"=> "Truck Brake Failure",
              "severity"=> "Minor",
              "latitude"=> 14.978029,
              "longitude"=> 120.519913,
              "recommendation"=> "Regularly inspect and maintain the braking system of commercial vehicles, ensuring they are in proper working condition, and drivers should be trained to respond appropriately in case of brake failure emergencies."
            ],
            [
              "dateCommitted"=> "2018-04-18",
              "reason"=> "Car Door Collision with a Cyclist",
              "severity"=> "Serious",
              "latitude"=> 14.992621,
              "longitude"=> 120.512444,
              "recommendation"=> "Always check for cyclists before opening car doors, especially on busy streets with bike lanes. Drivers should use the \"Dutch Reach\" technique, opening the door with the hand farthest from the door. Cyclists should also ride a safe distance away from parked cars to minimize the risk of collisions."
            ],
            [
              "dateCommitted"=> "2018-04-21",
              "reason"=> "Rollover Crash on Curvy Road",
              "severity"=> "Minor",
              "latitude"=> 14.959538,
              "longitude"=> 120.494591,
              "recommendation"=> "Reduce speed on sharp curves, avoid sudden steering maneuvers, and ensure proper vehicle maintenance, including tire condition and suspension, to prevent rollover accidents."
            ],
            [
              "dateCommitted"=> "2018-04-25",
              "reason"=> "Biker Skids on Wet Leaves and Falls on a Rainy Day",
              "severity"=> "Fatal",
              "latitude"=> 14.934328,
              "longitude"=> 120.498451,
              "recommendation"=> "During wet and rainy conditions, be cautious when riding over surfaces covered in leaves or other debris. Leaves can become slippery, reducing traction. Slow down and avoid sudden maneuvers. Also, ensure your bikes tires have sufficient tread for improved grip on wet roads."
            ],
            [
              "dateCommitted"=> "2018-04-25",
              "reason"=> "Merge Lane Collision",
              "severity"=> "Minor",
              "latitude"=> 14.982962,
              "longitude"=> 120.528923,
              "recommendation"=> "Yield to traffic already on the main road when merging, use turn signals to indicate intentions, and communicate with other drivers to safely merge into traffic."
            ],
            [
              "dateCommitted"=> "2018-05-01",
              "reason"=> "Jeepney Brake Failure",
              "severity"=> "Serious",
              "latitude"=> 14.974961,
              "longitude"=> 120.527206,
              "recommendation"=> "Regular maintenance is crucial for public transportation vehicles like jeepneys. Properly inspect and service brakes to prevent failures. Drivers should maintain a safe following distance and drive at a speed that allows them to stop in time."
            ],
            [
              "dateCommitted"=> "2018-05-01",
              "reason"=> "Head On Collision",
              "severity"=> "Fatal",
              "latitude"=> 14.936215,
              "longitude"=> 120.489853,
              "recommendation"=> "Always stay in your lane and avoid overtaking in no-passing zones, maintain a safe following distance, and adhere to traffic signs and signals."
            ],
            [
              "dateCommitted"=> "2018-05-02",
              "reason"=> "Side Mirror Scraping",
              "severity"=> "Serious",
              "latitude"=> 14.931591,
              "longitude"=> 120.503517,
              "recommendation"=> "Be cautious when passing parked cars or tight spaces, keeping a safe distance from obstacles to avoid side mirror collisions."
            ],
            [
              "dateCommitted"=> "2018-05-07",
              "reason"=> "Jeepney Brake Failure",
              "severity"=> "Serious",
              "latitude"=> 14.98603,
              "longitude"=> 120.542358,
              "recommendation"=> "Regular maintenance is crucial for public transportation vehicles like jeepneys. Properly inspect and service brakes to prevent failures. Drivers should maintain a safe following distance and drive at a speed that allows them to stop in time."
            ],
            [
              "dateCommitted"=> "2018-05-12",
              "reason"=> "Merge Lane Collision",
              "severity"=> "Serious",
              "latitude"=> 14.983252,
              "longitude"=> 120.539223,
              "recommendation"=> "Yield to traffic already on the main road when merging, use turn signals to indicate intentions, and communicate with other drivers to safely merge into traffic."
            ],
            [
              "dateCommitted"=> "2018-05-13",
              "reason"=> "Hydroplaning Accident",
              "severity"=> "Moderate",
              "latitude"=> 14.967208,
              "longitude"=> 120.526436,
              "recommendation"=> "Drive at reduced speeds during rainy conditions, maintain proper tire tread and inflation, and avoid sudden maneuvers on wet roads to prevent hydroplaning accidents."
            ],
            [
              "dateCommitted"=> "2018-05-15",
              "reason"=> "Side Mirror Scraping",
              "severity"=> "Fatal",
              "latitude"=> 14.979645,
              "longitude"=> 120.504166,
              "recommendation"=> "Be cautious when passing parked cars or tight spaces, keeping a safe distance from obstacles to avoid side mirror collisions."
            ],
            [
              "dateCommitted"=> "2018-05-22",
              "reason"=> "Wrong Way Driving on Highway",
              "severity"=> "Moderate",
              "latitude"=> 14.975873,
              "longitude"=> 120.527786,
              "recommendation"=> "Pay close attention to road signs, especially those indicating one-way streets or highway entrances, and refrain from driving under the influence of alcohol or drugs to prevent wrong-way accidents."
            ],
            [
              "dateCommitted"=> "2018-06-13",
              "reason"=> "Truck Brake Failure",
              "severity"=> "Serious",
              "latitude"=> 14.922676,
              "longitude"=> 120.48011,
              "recommendation"=> "Regularly inspect and maintain the braking system of commercial vehicles, ensuring they are in proper working condition, and drivers should be trained to respond appropriately in case of brake failure emergencies."
            ],
            [
              "dateCommitted"=> "2018-06-24",
              "reason"=> "Rear End Collision",
              "severity"=> "Serious",
              "latitude"=> 14.985325,
              "longitude"=> 120.551155,
              "recommendation"=> "Maintain a safe following distance from the vehicle ahead and be attentive to sudden stops, brake early and gradually when necessary."
            ],
            [
              "dateCommitted"=> "2018-07-28",
              "reason"=> "Rear End Collision",
              "severity"=> "Serious",
              "latitude"=> 14.984247,
              "longitude"=> 120.50721,
              "recommendation"=> "Maintain a safe following distance from the vehicle ahead and be attentive to sudden stops, brake early and gradually when necessary."
            ],
            [
              "dateCommitted"=> "2018-07-28",
              "reason"=> "Jeepney Brake Failure",
              "severity"=> "Serious",
              "latitude"=> 14.974546,
              "longitude"=> 120.459099,
              "recommendation"=> "Regular maintenance is crucial for public transportation vehicles like jeepneys. Properly inspect and service brakes to prevent failures. Drivers should maintain a safe following distance and drive at a speed that allows them to stop in time."
            ],
            [
              "dateCommitted"=> "2018-08-08",
              "reason"=> "Fender Bender in Heavy Traffic",
              "severity"=> "Serious",
              "latitude"=> 14.986403,
              "longitude"=> 120.544502,
              "recommendation"=> "Increase following distance in congested traffic, avoid tailgating, and drive at a reasonable speed to minimize the risk of minor rear-end collisions."
            ],
            [
              "dateCommitted"=> "2018-08-11",
              "reason"=> "Hydroplaning Accident",
              "severity"=> "Serious",
              "latitude"=> 14.973427,
              "longitude"=> 120.532272,
              "recommendation"=> "Drive at reduced speeds during rainy conditions, maintain proper tire tread and inflation, and avoid sudden maneuvers on wet roads to prevent hydroplaning accidents."
            ],
            [
              "dateCommitted"=> "2018-08-17",
              "reason"=> "Truck Brake Failure",
              "severity"=> "Minor",
              "latitude"=> 14.974049,
              "longitude"=> 120.500984,
              "recommendation"=> "Regularly inspect and maintain the braking system of commercial vehicles, ensuring they are in proper working condition, and drivers should be trained to respond appropriately in case of brake failure emergencies."
            ],
            [
              "dateCommitted"=> "2018-08-28",
              "reason"=> "Cyclist Hit by Turning Vehicle",
              "severity"=> "Minor",
              "latitude"=> 14.994943,
              "longitude"=> 120.512962,
              "recommendation"=> "Always check your blind spots before turning, yield to cyclists and pedestrians, and signal your intentions clearly to other road users."
            ],
            [
              "dateCommitted"=> "2018-08-30",
              "reason"=> "Side Mirror Scraping",
              "severity"=> "Fatal",
              "latitude"=> 14.947472,
              "longitude"=> 120.491974,
              "recommendation"=> "Be cautious when passing parked cars or tight spaces, keeping a safe distance from obstacles to avoid side mirror collisions."
            ],
            [
              "dateCommitted"=> "2018-09-07",
              "reason"=> "Sudden Lane Change Collision",
              "severity"=> "Fatal",
              "latitude"=> 14.978941,
              "longitude"=> 120.534973,
              "recommendation"=> "Always use turn signals to indicate lane changes, check blind spots, and be cautious of other drivers when merging or changing lanes, maintaining a safe distance."
            ],
            [
              "dateCommitted"=> "2018-09-19",
              "reason"=> "Motorcycle Collides with Pedestrian at a Zebra Crossing",
              "severity"=> "Moderate",
              "latitude"=> 14.978112,
              "longitude"=> 120.519226,
              "recommendation"=> "Both motorcyclists and pedestrians should be aware of their surroundings. Motorcyclists should slow down near pedestrian crossings and yield the right of way. Pedestrians should only cross at designated crossings and look both ways before crossing."
            ],
            [
              "dateCommitted"=> "2018-09-20",
              "reason"=> "Fender Bender in Heavy Traffic",
              "severity"=> "Fatal",
              "latitude"=> 15.003482,
              "longitude"=> 120.490814,
              "recommendation"=> "Increase following distance in congested traffic, avoid tailgating, and drive at a reasonable speed to minimize the risk of minor rear-end collisions."
            ],
            [
              "dateCommitted"=> "2018-09-20",
              "reason"=> "Intersection Collision between a Turning Vehicle and a Cyclist",
              "severity"=> "Serious",
              "latitude"=> 15.003482,
              "longitude"=> 120.490814,
              "recommendation"=> "Both drivers and cyclists should exercise caution at intersections. Drivers must check their blind spots and use their turn signals well in advance of turning. Cyclists should use hand signals to indicate their intentions and make eye contact with drivers to ensure theyre seen. Always be mindful of each others presence when sharing the road."
            ],
            [
              "dateCommitted"=> "2018-10-15",
              "reason"=> "Side Mirror Scraping",
              "severity"=> "Fatal",
              "latitude"=> 14.97749,
              "longitude"=> 120.520172,
              "recommendation"=> "Be cautious when passing parked cars or tight spaces, keeping a safe distance from obstacles to avoid side mirror collisions."
            ],
            [
              "dateCommitted"=> "2018-10-22",
              "reason"=> "Jeepney Brake Failure",
              "severity"=> "Serious",
              "latitude"=> 14.976951,
              "longitude"=> 120.518883,
              "recommendation"=> "Regular maintenance is crucial for public transportation vehicles like jeepneys. Properly inspect and service brakes to prevent failures. Drivers should maintain a safe following distance and drive at a speed that allows them to stop in time."
            ],
            [
              "dateCommitted"=> "2018-10-31",
              "reason"=> "Biker Skids on Wet Leaves and Falls on a Rainy Day",
              "severity"=> "Fatal",
              "latitude"=> 14.940797,
              "longitude"=> 120.50515,
              "recommendation"=> "During wet and rainy conditions, be cautious when riding over surfaces covered in leaves or other debris. Leaves can become slippery, reducing traction. Slow down and avoid sudden maneuvers. Also, ensure your bikes tires have sufficient tread for improved grip on wet roads."
            ],
            [
              "dateCommitted"=> "2018-11-01",
              "reason"=> "Rear End Collision",
              "severity"=> "Serious",
              "latitude"=> 14.972598,
              "longitude"=> 120.533691,
              "recommendation"=> "Maintain a safe following distance from the vehicle ahead and be attentive to sudden stops, brake early and gradually when necessary."
            ],
            [
              "dateCommitted"=> "2018-11-03",
              "reason"=> "Merge Lane Collision",
              "severity"=> "Serious",
              "latitude"=> 14.951992,
              "longitude"=> 120.515839,
              "recommendation"=> "Yield to traffic already on the main road when merging, use turn signals to indicate intentions, and communicate with other drivers to safely merge into traffic."
            ],
            [
              "dateCommitted"=> "2018-11-04",
              "reason"=> "Head On Collision",
              "severity"=> "Fatal",
              "latitude"=> 14.959952,
              "longitude"=> 120.494591,
              "recommendation"=> "Always stay in your lane and avoid overtaking in no-passing zones, maintain a safe following distance, and adhere to traffic signs and signals."
            ],
            [
              "dateCommitted"=> "2018-11-08",
              "reason"=> "Car Door Collision with a Cyclist",
              "severity"=> "Minor",
              "latitude"=> 14.972059,
              "longitude"=> 120.458885,
              "recommendation"=> "Always check for cyclists before opening car doors, especially on busy streets with bike lanes. Drivers should use the \"Dutch Reach\" technique, opening the door with the hand farthest from the door. Cyclists should also ride a safe distance away from parked cars to minimize the risk of collisions."
            ],
            [
              "dateCommitted"=> "2018-11-09",
              "reason"=> "Car Door Collision with a Cyclist",
              "severity"=> "Serious",
              "latitude"=> 14.960782,
              "longitude"=> 120.494675,
              "recommendation"=> "Always check for cyclists before opening car doors, especially on busy streets with bike lanes. Drivers should use the \"Dutch Reach\" technique, opening the door with the hand farthest from the door. Cyclists should also ride a safe distance away from parked cars to minimize the risk of collisions."
            ],
            [
              "dateCommitted"=> "2018-11-13",
              "reason"=> "Drowsy Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.955475,
              "longitude"=> 120.494247,
              "recommendation"=> "Get sufficient rest before long journeys, take regular breaks during extended drives, and avoid driving during peak drowsy hours (late at night or early morning) to prevent accidents caused by driver fatigue."
            ],
            [
              "dateCommitted"=> "2018-11-17",
              "reason"=> "Fender Bender in Heavy Traffic",
              "severity"=> "Serious",
              "latitude"=> 14.986652,
              "longitude"=> 120.508583,
              "recommendation"=> "Increase following distance in congested traffic, avoid tailgating, and drive at a reasonable speed to minimize the risk of minor rear-end collisions."
            ],
            [
              "dateCommitted"=> "2018-11-19",
              "reason"=> "Side Mirror Scraping",
              "severity"=> "Serious",
              "latitude"=> 14.979936,
              "longitude"=> 120.535965,
              "recommendation"=> "Be cautious when passing parked cars or tight spaces, keeping a safe distance from obstacles to avoid side mirror collisions."
            ],
            [
              "dateCommitted"=> "2018-11-27",
              "reason"=> "Car Door Collision with a Cyclist",
              "severity"=> "Minor",
              "latitude"=> 14.985449,
              "longitude"=> 120.50528,
              "recommendation"=> "Always check for cyclists before opening car doors, especially on busy streets with bike lanes. Drivers should use the \"Dutch Reach\" technique, opening the door with the hand farthest from the door. Cyclists should also ride a safe distance away from parked cars to minimize the risk of collisions."
            ],
            [
              "dateCommitted"=> "2018-12-08",
              "reason"=> "Intersection Collision between a Turning Vehicle and a Cyclist",
              "severity"=> "Serious",
              "latitude"=> 14.979438,
              "longitude"=> 120.530258,
              "recommendation"=> "Both drivers and cyclists should exercise caution at intersections. Drivers must check their blind spots and use their turn signals well in advance of turning. Cyclists should use hand signals to indicate their intentions and make eye contact with drivers to ensure theyre seen. Always be mindful of each others presence when sharing the road."
            ],
            [
              "dateCommitted"=> "2018-12-08",
              "reason"=> "Sudden Lane Change Collision",
              "severity"=> "Serious",
              "latitude"=> 14.978775,
              "longitude"=> 120.530685,
              "recommendation"=> "Always use turn signals to indicate lane changes, check blind spots, and be cautious of other drivers when merging or changing lanes, maintaining a safe distance."
            ],
            [
              "dateCommitted"=> "2018-12-10",
              "reason"=> "Jeepney Brake Failure",
              "severity"=> "Serious",
              "latitude"=> 14.979998,
              "longitude"=> 120.529762,
              "recommendation"=> "Regular maintenance is crucial for public transportation vehicles like jeepneys. Properly inspect and service brakes to prevent failures. Drivers should maintain a safe following distance and drive at a speed that allows them to stop in time."
            ],
            [
              "dateCommitted"=> "2018-12-15",
              "reason"=> "Truck Brake Failure",
              "severity"=> "Serious",
              "latitude"=> 14.986154,
              "longitude"=> 120.482918,
              "recommendation"=> "Regularly inspect and maintain the braking system of commercial vehicles, ensuring they are in proper working condition, and drivers should be trained to respond appropriately in case of brake failure emergencies."
            ],
            [
              "dateCommitted"=> "2018-12-22",
              "reason"=> "Rollover Crash on Curvy Road",
              "severity"=> "Minor",
              "latitude"=> 14.977946,
              "longitude"=> 120.519615,
              "recommendation"=> "Reduce speed on sharp curves, avoid sudden steering maneuvers, and ensure proper vehicle maintenance, including tire condition and suspension, to prevent rollover accidents."
            ],
            [
              "dateCommitted"=> "2018-12-22",
              "reason"=> "Jeepney Brake Failure",
              "severity"=> "Serious",
              "latitude"=> 14.974961,
              "longitude"=> 120.527763,
              "recommendation"=> "Regular maintenance is crucial for public transportation vehicles like jeepneys. Properly inspect and service brakes to prevent failures. Drivers should maintain a safe following distance and drive at a speed that allows them to stop in time."
            ],
            [
              "dateCommitted"=> "2018-12-22",
              "reason"=> "Truck Brake Failure",
              "severity"=> "Serious",
              "latitude"=> 14.981138,
              "longitude"=> 120.536819,
              "recommendation"=> "Regularly inspect and maintain the braking system of commercial vehicles, ensuring they are in proper working condition, and drivers should be trained to respond appropriately in case of brake failure emergencies."
            ],
            [
              "dateCommitted"=> "2018-12-31",
              "reason"=> "Biker Skids on Wet Leaves and Falls on a Rainy Day",
              "severity"=> "Fatal",
              "latitude"=> 14.96186,
              "longitude"=> 120.494507,
              "recommendation"=> "During wet and rainy conditions, be cautious when riding over surfaces covered in leaves or other debris. Leaves can become slippery, reducing traction. Slow down and avoid sudden maneuvers. Also, ensure your bikes tires have sufficient tread for improved grip on wet roads."
            ],
            [
              "dateCommitted"=> "2019-01-05",
              "reason"=> "Parking Lot Accident",
              "severity"=> "Moderate",
              "latitude"=> 14.98375,
              "longitude"=> 120.48365,
              "recommendation"=> "Drive cautiously in parking lots, observe posted speed limits, and be mindful of pedestrians and other vehicles in crowded areas."
            ],
            [
              "dateCommitted"=> "2019-01-05",
              "reason"=> "Merge Lane Collision",
              "severity"=> "Minor",
              "latitude"=> 14.98375,
              "longitude"=> 120.48365,
              "recommendation"=> "Yield to traffic already on the main road when merging, use turn signals to indicate intentions, and communicate with other drivers to safely merge into traffic."
            ],
            [
              "dateCommitted"=> "2019-01-06",
              "reason"=> "Wrong Way Driving on Highway",
              "severity"=> "Moderate",
              "latitude"=> 14.991875,
              "longitude"=> 120.504936,
              "recommendation"=> "Pay close attention to road signs, especially those indicating one-way streets or highway entrances, and refrain from driving under the influence of alcohol or drugs to prevent wrong-way accidents."
            ],
            [
              "dateCommitted"=> "2019-01-10",
              "reason"=> "Cyclist Hit by Turning Vehicle",
              "severity"=> "Minor",
              "latitude"=> 14.954604,
              "longitude"=> 120.523003,
              "recommendation"=> "Always check your blind spots before turning, yield to cyclists and pedestrians, and signal your intentions clearly to other road users."
            ],
            [
              "dateCommitted"=> "2019-01-10",
              "reason"=> "Rollover Crash on Curvy Road",
              "severity"=> "Minor",
              "latitude"=> 14.954604,
              "longitude"=> 120.523003,
              "recommendation"=> "Reduce speed on sharp curves, avoid sudden steering maneuvers, and ensure proper vehicle maintenance, including tire condition and suspension, to prevent rollover accidents."
            ],
            [
              "dateCommitted"=> "2019-01-14",
              "reason"=> "Car Door Collision with a Cyclist",
              "severity"=> "Minor",
              "latitude"=> 14.983833,
              "longitude"=> 120.539398,
              "recommendation"=> "Always check for cyclists before opening car doors, especially on busy streets with bike lanes. Drivers should use the \"Dutch Reach\" technique, opening the door with the hand farthest from the door. Cyclists should also ride a safe distance away from parked cars to minimize the risk of collisions."
            ],
            [
              "dateCommitted"=> "2019-01-20",
              "reason"=> "Jeepney Brake Failure",
              "severity"=> "Serious",
              "latitude"=> 14.9886,
              "longitude"=> 120.509567,
              "recommendation"=> "Regular maintenance is crucial for public transportation vehicles like jeepneys. Properly inspect and service brakes to prevent failures. Drivers should maintain a safe following distance and drive at a speed that allows them to stop in time."
            ],
            [
              "dateCommitted"=> "2019-01-20",
              "reason"=> "T Bone Intersection Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.9886,
              "longitude"=> 120.509567,
              "recommendation"=> "Drivers should obey traffic signals and stop signs, approach intersections with caution, and double-check for oncoming traffic before proceeding."
            ],
            [
              "dateCommitted"=> "2019-01-25",
              "reason"=> "Cyclist Hit by Turning Vehicle",
              "severity"=> "Minor",
              "latitude"=> 14.977811,
              "longitude"=> 120.533936,
              "recommendation"=> "Always check your blind spots before turning, yield to cyclists and pedestrians, and signal your intentions clearly to other road users."
            ],
            [
              "dateCommitted"=> "2019-01-25",
              "reason"=> "Jeepney Brake Failure",
              "severity"=> "Serious",
              "latitude"=> 14.985822,
              "longitude"=> 120.542183,
              "recommendation"=> "Regular maintenance is crucial for public transportation vehicles like jeepneys. Properly inspect and service brakes to prevent failures. Drivers should maintain a safe following distance and drive at a speed that allows them to stop in time."
            ],
            [
              "dateCommitted"=> "2019-02-12",
              "reason"=> "Wrong Way Driving on Highway",
              "severity"=> "Moderate",
              "latitude"=> 14.972722,
              "longitude"=> 120.53244,
              "recommendation"=> "Pay close attention to road signs, especially those indicating one-way streets or highway entrances, and refrain from driving under the influence of alcohol or drugs to prevent wrong-way accidents."
            ],
            [
              "dateCommitted"=> "2019-02-13",
              "reason"=> "Merge Lane Collision",
              "severity"=> "Minor",
              "latitude"=> 14.987232,
              "longitude"=> 120.508797,
              "recommendation"=> "Yield to traffic already on the main road when merging, use turn signals to indicate intentions, and communicate with other drivers to safely merge into traffic."
            ],
            [
              "dateCommitted"=> "2019-02-17",
              "reason"=> "Fender Bender in Heavy Traffic",
              "severity"=> "Serious",
              "latitude"=> 14.937355,
              "longitude"=> 120.489311,
              "recommendation"=> "Increase following distance in congested traffic, avoid tailgating, and drive at a reasonable speed to minimize the risk of minor rear-end collisions."
            ],
            [
              "dateCommitted"=> "2019-02-17",
              "reason"=> "Side Mirror Scraping",
              "severity"=> "Serious",
              "latitude"=> 14.937355,
              "longitude"=> 120.489311,
              "recommendation"=> "Be cautious when passing parked cars or tight spaces, keeping a safe distance from obstacles to avoid side mirror collisions."
            ],
            [
              "dateCommitted"=> "2019-02-19",
              "reason"=> "Truck Brake Failure",
              "severity"=> "Minor",
              "latitude"=> 14.989222,
              "longitude"=> 120.538239,
              "recommendation"=> "Regularly inspect and maintain the braking system of commercial vehicles, ensuring they are in proper working condition, and drivers should be trained to respond appropriately in case of brake failure emergencies."
            ],
            [
              "dateCommitted"=> "2019-02-19",
              "reason"=> "Wrong Way Driving on Highway",
              "severity"=> "Moderate",
              "latitude"=> 14.967167,
              "longitude"=> 120.44558,
              "recommendation"=> "Pay close attention to road signs, especially those indicating one-way streets or highway entrances, and refrain from driving under the influence of alcohol or drugs to prevent wrong-way accidents."
            ],
            [
              "dateCommitted"=> "2019-02-23",
              "reason"=> "Motorcycle Collides with Pedestrian at a Zebra Crossing",
              "severity"=> "Moderate",
              "latitude"=> 14.975044,
              "longitude"=> 120.501457,
              "recommendation"=> "Both motorcyclists and pedestrians should be aware of their surroundings. Motorcyclists should slow down near pedestrian crossings and yield the right of way. Pedestrians should only cross at designated crossings and look both ways before crossing."
            ],
            [
              "dateCommitted"=> "2019-02-23",
              "reason"=> "Side Mirror Scraping",
              "severity"=> "Serious",
              "latitude"=> 14.975044,
              "longitude"=> 120.501457,
              "recommendation"=> "Be cautious when passing parked cars or tight spaces, keeping a safe distance from obstacles to avoid side mirror collisions."
            ],
            [
              "dateCommitted"=> "2019-02-23",
              "reason"=> "Parking Lot Accident",
              "severity"=> "Moderate",
              "latitude"=> 14.977614,
              "longitude"=> 120.520256,
              "recommendation"=> "Drive cautiously in parking lots, observe posted speed limits, and be mindful of pedestrians and other vehicles in crowded areas."
            ],
            [
              "dateCommitted"=> "2019-03-04",
              "reason"=> "Cyclist Hit by Turning Vehicle",
              "severity"=> "Moderate",
              "latitude"=> 15.030258,
              "longitude"=> 120.515617,
              "recommendation"=> "Always check your blind spots before turning, yield to cyclists and pedestrians, and signal your intentions clearly to other road users."
            ],
            [
              "dateCommitted"=> "2019-03-04",
              "reason"=> "Distracted Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.965218,
              "longitude"=> 120.459572,
              "recommendation"=> "Avoid distractions while driving, such as using mobile phones, eating, or adjusting the radio, and stay focused on the road at all times."
            ],
            [
              "dateCommitted"=> "2019-03-12",
              "reason"=> "Drowsy Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.9755,
              "longitude"=> 120.48288,
              "recommendation"=> "Get sufficient rest before long journeys, take regular breaks during extended drives, and avoid driving during peak drowsy hours (late at night or early morning) to prevent accidents caused by driver fatigue."
            ],
            [
              "dateCommitted"=> "2019-03-12",
              "reason"=> "Side Mirror Scraping",
              "severity"=> "Serious",
              "latitude"=> 14.983335,
              "longitude"=> 120.538536,
              "recommendation"=> "Be cautious when passing parked cars or tight spaces, keeping a safe distance from obstacles to avoid side mirror collisions."
            ],
            [
              "dateCommitted"=> "2019-03-17",
              "reason"=> "Jeepney Brake Failure",
              "severity"=> "Fatal",
              "latitude"=> 14.982879,
              "longitude"=> 120.512962,
              "recommendation"=> "Regular maintenance is crucial for public transportation vehicles like jeepneys. Properly inspect and service brakes to prevent failures. Drivers should maintain a safe following distance and drive at a speed that allows them to stop in time."
            ],
            [
              "dateCommitted"=> "2019-03-18",
              "reason"=> "Jeepney Brake Failure",
              "severity"=> "Serious",
              "latitude"=> 14.975956,
              "longitude"=> 120.481461,
              "recommendation"=> "Regular maintenance is crucial for public transportation vehicles like jeepneys. Properly inspect and service brakes to prevent failures. Drivers should maintain a safe following distance and drive at a speed that allows them to stop in time."
            ],
            [
              "dateCommitted"=> "2019-03-20",
              "reason"=> "Merge Lane Collision",
              "severity"=> "Minor",
              "latitude"=> 14.956677,
              "longitude"=> 120.514977,
              "recommendation"=> "Yield to traffic already on the main road when merging, use turn signals to indicate intentions, and communicate with other drivers to safely merge into traffic."
            ],
            [
              "dateCommitted"=> "2019-03-23",
              "reason"=> "Sudden Lane Change Collision",
              "severity"=> "Serious",
              "latitude"=> 14.942497,
              "longitude"=> 120.491158,
              "recommendation"=> "Always use turn signals to indicate lane changes, check blind spots, and be cautious of other drivers when merging or changing lanes, maintaining a safe distance."
            ],
            [
              "dateCommitted"=> "2019-03-26",
              "reason"=> "Side Mirror Scraping",
              "severity"=> "Serious",
              "latitude"=> 14.976847,
              "longitude"=> 120.520363,
              "recommendation"=> "Be cautious when passing parked cars or tight spaces, keeping a safe distance from obstacles to avoid side mirror collisions."
            ],
            [
              "dateCommitted"=> "2019-01-01",
              "reason"=> "Biker Skids on Wet Leaves and Falls on a Rainy Day",
              "severity"=> "Fatal",
              "latitude"=> 14.994984,
              "longitude"=> 120.538406,
              "recommendation"=> "During wet and rainy conditions, be cautious when riding over surfaces covered in leaves or other debris. Leaves can become slippery, reducing traction. Slow down and avoid sudden maneuvers. Also, ensure your bikes tires have sufficient tread for improved grip on wet roads."
            ],
            [
              "dateCommitted"=> "2019-01-01",
              "reason"=> "Truck Brake Failure",
              "severity"=> "Minor",
              "latitude"=> 14.994984,
              "longitude"=> 120.538406,
              "recommendation"=> "Regularly inspect and maintain the braking system of commercial vehicles, ensuring they are in proper working condition, and drivers should be trained to respond appropriately in case of brake failure emergencies."
            ],
            [
              "dateCommitted"=> "2019-01-05",
              "reason"=> "Side Mirror Scraping",
              "severity"=> "Serious",
              "latitude"=> 15.012104,
              "longitude"=> 120.515617,
              "recommendation"=> "Be cautious when passing parked cars or tight spaces, keeping a safe distance from obstacles to avoid side mirror collisions."
            ],
            [
              "dateCommitted"=> "2019-01-05",
              "reason"=> "Fender Bender in Heavy Traffic",
              "severity"=> "Fatal",
              "latitude"=> 15.012104,
              "longitude"=> 120.515617,
              "recommendation"=> "Increase following distance in congested traffic, avoid tailgating, and drive at a reasonable speed to minimize the risk of minor rear-end collisions."
            ],
            [
              "dateCommitted"=> "2019-01-05",
              "reason"=> "Jeepney Brake Failure",
              "severity"=> "Fatal",
              "latitude"=> 14.935572,
              "longitude"=> 120.49176,
              "recommendation"=> "Regular maintenance is crucial for public transportation vehicles like jeepneys. Properly inspect and service brakes to prevent failures. Drivers should maintain a safe following distance and drive at a speed that allows them to stop in time."
            ],
            [
              "dateCommitted"=> "2019-01-08",
              "reason"=> "Truck Brake Failure",
              "severity"=> "Minor",
              "latitude"=> 14.975894,
              "longitude"=> 120.532463,
              "recommendation"=> "Regularly inspect and maintain the braking system of commercial vehicles, ensuring they are in proper working condition, and drivers should be trained to respond appropriately in case of brake failure emergencies."
            ],
            [
              "dateCommitted"=> "2019-01-08",
              "reason"=> "Fender Bender in Heavy Traffic",
              "severity"=> "Serious",
              "latitude"=> 14.975894,
              "longitude"=> 120.532463,
              "recommendation"=> "Increase following distance in congested traffic, avoid tailgating, and drive at a reasonable speed to minimize the risk of minor rear-end collisions."
            ],
            [
              "dateCommitted"=> "2019-01-11",
              "reason"=> "Intersection Collision between a Turning Vehicle and a Cyclist",
              "severity"=> "Serious",
              "latitude"=> 14.986708,
              "longitude"=> 120.546776,
              "recommendation"=> "Both drivers and cyclists should exercise caution at intersections. Drivers must check their blind spots and use their turn signals well in advance of turning. Cyclists should use hand signals to indicate their intentions and make eye contact with drivers to ensure theyre seen. Always be mindful of each others presence when sharing the road."
            ],
            [
              "dateCommitted"=> "2019-01-11",
              "reason"=> "Rear End Collision",
              "severity"=> "Serious",
              "latitude"=> 14.986708,
              "longitude"=> 120.546776,
              "recommendation"=> "Maintain a safe following distance from the vehicle ahead and be attentive to sudden stops, brake early and gradually when necessary."
            ],
            [
              "dateCommitted"=> "2019-01-20",
              "reason"=> "Sudden Lane Change Collision",
              "severity"=> "Serious",
              "latitude"=> 14.996684,
              "longitude"=> 120.533562,
              "recommendation"=> "Always use turn signals to indicate lane changes, check blind spots, and be cautious of other drivers when merging or changing lanes, maintaining a safe distance."
            ],
            [
              "dateCommitted"=> "2019-01-20",
              "reason"=> "Parking Lot Accident",
              "severity"=> "Moderate",
              "latitude"=> 14.996684,
              "longitude"=> 120.533562,
              "recommendation"=> "Drive cautiously in parking lots, observe posted speed limits, and be mindful of pedestrians and other vehicles in crowded areas."
            ],
            [
              "dateCommitted"=> "2019-01-20",
              "reason"=> "Head On Collision",
              "severity"=> "Fatal",
              "latitude"=> 14.97778,
              "longitude"=> 120.534592,
              "recommendation"=> "Always stay in your lane and avoid overtaking in no-passing zones, maintain a safe following distance, and adhere to traffic signs and signals."
            ],
            [
              "dateCommitted"=> "2019-01-23",
              "reason"=> "Rear End Collision",
              "severity"=> "Serious",
              "latitude"=> 14.989885,
              "longitude"=> 120.538368,
              "recommendation"=> "Maintain a safe following distance from the vehicle ahead and be attentive to sudden stops, brake early and gradually when necessary."
            ],
            [
              "dateCommitted"=> "2019-01-23",
              "reason"=> "T Bone Intersection Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.989885,
              "longitude"=> 120.538368,
              "recommendation"=> "Drivers should obey traffic signals and stop signs, approach intersections with caution, and double-check for oncoming traffic before proceeding."
            ],
            [
              "dateCommitted"=> "2019-01-31",
              "reason"=> "Intersection Collision between a Turning Vehicle and a Cyclist",
              "severity"=> "Serious",
              "latitude"=> 14.979148,
              "longitude"=> 120.535278,
              "recommendation"=> "Both drivers and cyclists should exercise caution at intersections. Drivers must check their blind spots and use their turn signals well in advance of turning. Cyclists should use hand signals to indicate their intentions and make eye contact with drivers to ensure theyre seen. Always be mindful of each others presence when sharing the road."
            ],
            [
              "dateCommitted"=> "2019-01-31",
              "reason"=> "Motorcycle Collides with Pedestrian at a Zebra Crossing",
              "severity"=> "Moderate",
              "latitude"=> 14.979148,
              "longitude"=> 120.535278,
              "recommendation"=> "Both motorcyclists and pedestrians should be aware of their surroundings. Motorcyclists should slow down near pedestrian crossings and yield the right of way. Pedestrians should only cross at designated crossings and look both ways before crossing."
            ],
            [
              "dateCommitted"=> "2019-02-01",
              "reason"=> "Biker Skids on Wet Leaves and Falls on a Rainy Day",
              "severity"=> "Fatal",
              "latitude"=> 14.951577,
              "longitude"=> 120.517853,
              "recommendation"=> "During wet and rainy conditions, be cautious when riding over surfaces covered in leaves or other debris. Leaves can become slippery, reducing traction. Slow down and avoid sudden maneuvers. Also, ensure your bikes tires have sufficient tread for improved grip on wet roads."
            ],
            [
              "dateCommitted"=> "2019-02-01",
              "reason"=> "Rear End Collision",
              "severity"=> "Serious",
              "latitude"=> 14.951577,
              "longitude"=> 120.517853,
              "recommendation"=> "Maintain a safe following distance from the vehicle ahead and be attentive to sudden stops, brake early and gradually when necessary."
            ],
            [
              "dateCommitted"=> "2019-02-04",
              "reason"=> "Biker Skids on Wet Leaves and Falls on a Rainy Day",
              "severity"=> "Fatal",
              "latitude"=> 14.977034,
              "longitude"=> 120.520943,
              "recommendation"=> "During wet and rainy conditions, be cautious when riding over surfaces covered in leaves or other debris. Leaves can become slippery, reducing traction. Slow down and avoid sudden maneuvers. Also, ensure your bikes tires have sufficient tread for improved grip on wet roads."
            ],
            [
              "dateCommitted"=> "2019-02-04",
              "reason"=> "Cyclist Hit by Turning Vehicle",
              "severity"=> "Minor",
              "latitude"=> 14.977034,
              "longitude"=> 120.520943,
              "recommendation"=> "Always check your blind spots before turning, yield to cyclists and pedestrians, and signal your intentions clearly to other road users."
            ],
            [
              "dateCommitted"=> "2019-02-16",
              "reason"=> "Parking Lot Accident",
              "severity"=> "Moderate",
              "latitude"=> 14.992787,
              "longitude"=> 120.512787,
              "recommendation"=> "Drive cautiously in parking lots, observe posted speed limits, and be mindful of pedestrians and other vehicles in crowded areas."
            ],
            [
              "dateCommitted"=> "2019-02-16",
              "reason"=> "Car Door Collision with a Cyclist",
              "severity"=> "Minor",
              "latitude"=> 14.992787,
              "longitude"=> 120.512787,
              "recommendation"=> "Always check for cyclists before opening car doors, especially on busy streets with bike lanes. Drivers should use the \"Dutch Reach\" technique, opening the door with the hand farthest from the door. Cyclists should also ride a safe distance away from parked cars to minimize the risk of collisions."
            ],
            [
              "dateCommitted"=> "2019-01-02",
              "reason"=> "Drowsy Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.974919,
              "longitude"=> 120.52729,
              "recommendation"=> "Get sufficient rest before long journeys, take regular breaks during extended drives, and avoid driving during peak drowsy hours (late at night or early morning) to prevent accidents caused by driver fatigue."
            ],
            [
              "dateCommitted"=> "2019-02-25",
              "reason"=> "T Bone Intersection Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.976287,
              "longitude"=> 120.526436,
              "recommendation"=> "Drivers should obey traffic signals and stop signs, approach intersections with caution, and double-check for oncoming traffic before proceeding."
            ],
            [
              "dateCommitted"=> "2019-02-25",
              "reason"=> "Truck Brake Failure",
              "severity"=> "Minor",
              "latitude"=> 14.976287,
              "longitude"=> 120.526436,
              "recommendation"=> "Regularly inspect and maintain the braking system of commercial vehicles, ensuring they are in proper working condition, and drivers should be trained to respond appropriately in case of brake failure emergencies."
            ],
            [
              "dateCommitted"=> "2019-02-14",
              "reason"=> "Car Door Collision with a Cyclist",
              "severity"=> "Serious",
              "latitude"=> 14.976785,
              "longitude"=> 120.502274,
              "recommendation"=> "Always check for cyclists before opening car doors, especially on busy streets with bike lanes. Drivers should use the \"Dutch Reach\" technique, opening the door with the hand farthest from the door. Cyclists should also ride a safe distance away from parked cars to minimize the risk of collisions."
            ],
            [
              "dateCommitted"=> "2019-02-14",
              "reason"=> "Hydroplaning Accident",
              "severity"=> "Serious",
              "latitude"=> 14.976785,
              "longitude"=> 120.502274,
              "recommendation"=> "Drive at reduced speeds during rainy conditions, maintain proper tire tread and inflation, and avoid sudden maneuvers on wet roads to prevent hydroplaning accidents."
            ],
            [
              "dateCommitted"=> "2019-03-03",
              "reason"=> "Distracted Driving Crash",
              "severity"=> "Serious",
              "latitude"=> 14.991087,
              "longitude"=> 120.511414,
              "recommendation"=> "Avoid distractions while driving, such as using mobile phones, eating, or adjusting the radio, and stay focused on the road at all times."
            ],
            [
              "dateCommitted"=> "2019-03-03",
              "reason"=> "Distracted Driving Crash",
              "severity"=> "Serious",
              "latitude"=> 14.994445,
              "longitude"=> 120.538712,
              "recommendation"=> "Avoid distractions while driving, such as using mobile phones, eating, or adjusting the radio, and stay focused on the road at all times."
            ],
            [
              "dateCommitted"=> "2019-03-09",
              "reason"=> "Biker Skids on Wet Leaves and Falls on a Rainy Day",
              "severity"=> "Fatal",
              "latitude"=> 14.974546,
              "longitude"=> 120.527206,
              "recommendation"=> "During wet and rainy conditions, be cautious when riding over surfaces covered in leaves or other debris. Leaves can become slippery, reducing traction. Slow down and avoid sudden maneuvers. Also, ensure your bikes tires have sufficient tread for improved grip on wet roads."
            ],
            [
              "dateCommitted"=> "2019-03-06",
              "reason"=> "Intersection Collision between a Turning Vehicle and a Cyclist",
              "severity"=> "Serious",
              "latitude"=> 14.987812,
              "longitude"=> 120.509186,
              "recommendation"=> "Both drivers and cyclists should exercise caution at intersections. Drivers must check their blind spots and use their turn signals well in advance of turning. Cyclists should use hand signals to indicate their intentions and make eye contact with drivers to ensure theyre seen. Always be mindful of each others presence when sharing the road."
            ],
            [
              "dateCommitted"=> "2019-03-06",
              "reason"=> "Truck Brake Failure",
              "severity"=> "Minor",
              "latitude"=> 14.987812,
              "longitude"=> 120.509186,
              "recommendation"=> "Regularly inspect and maintain the braking system of commercial vehicles, ensuring they are in proper working condition, and drivers should be trained to respond appropriately in case of brake failure emergencies."
            ],
            [
              "dateCommitted"=> "2019-03-09",
              "reason"=> "Rollover Crash on Curvy Road",
              "severity"=> "Minor",
              "latitude"=> 14.980267,
              "longitude"=> 120.516312,
              "recommendation"=> "Reduce speed on sharp curves, avoid sudden steering maneuvers, and ensure proper vehicle maintenance, including tire condition and suspension, to prevent rollover accidents."
            ],
            [
              "dateCommitted"=> "2019-07-29",
              "reason"=> "Drowsy Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.975914,
              "longitude"=> 120.501976,
              "recommendation"=> "Get sufficient rest before long journeys, take regular breaks during extended drives, and avoid driving during peak drowsy hours (late at night or early morning) to prevent accidents caused by driver fatigue."
            ],
            [
              "dateCommitted"=> "2019-09-03",
              "reason"=> "Rollover Crash on Curvy Road",
              "severity"=> "Minor",
              "latitude"=> 14.981511,
              "longitude"=> 120.537209,
              "recommendation"=> "Reduce speed on sharp curves, avoid sudden steering maneuvers, and ensure proper vehicle maintenance, including tire condition and suspension, to prevent rollover accidents."
            ],
            [
              "dateCommitted"=> "2019-09-05",
              "reason"=> "Rollover Crash on Curvy Road",
              "severity"=> "Minor",
              "latitude"=> 15.00829,
              "longitude"=> 120.526436,
              "recommendation"=> "Reduce speed on sharp curves, avoid sudden steering maneuvers, and ensure proper vehicle maintenance, including tire condition and suspension, to prevent rollover accidents."
            ],
            [
              "dateCommitted"=> "2019-09-30",
              "reason"=> "Intersection Collision between a Turning Vehicle and a Cyclist",
              "severity"=> "Serious",
              "latitude"=> 14.939345,
              "longitude"=> 120.490173,
              "recommendation"=> "Both drivers and cyclists should exercise caution at intersections. Drivers must check their blind spots and use their turn signals well in advance of turning. Cyclists should use hand signals to indicate their intentions and make eye contact with drivers to ensure theyre seen. Always be mindful of each others presence when sharing the road."
            ],
            [
              "dateCommitted"=> "2019-10-06",
              "reason"=> "Rollover Crash on Curvy Road",
              "severity"=> "Minor",
              "latitude"=> 14.933333,
              "longitude"=> 120.5,
              "recommendation"=> "Reduce speed on sharp curves, avoid sudden steering maneuvers, and ensure proper vehicle maintenance, including tire condition and suspension, to prevent rollover accidents."
            ],
            [
              "dateCommitted"=> "2019-09-01",
              "reason"=> "Wrong Way Driving on Highway",
              "severity"=> "Moderate",
              "latitude"=> 14.974505,
              "longitude"=> 120.528282,
              "recommendation"=> "Pay close attention to road signs, especially those indicating one-way streets or highway entrances, and refrain from driving under the influence of alcohol or drugs to prevent wrong-way accidents."
            ],
            [
              "dateCommitted"=> "2019-11-21",
              "reason"=> "Car Door Collision with a Cyclist",
              "severity"=> "Minor",
              "latitude"=> 14.97865,
              "longitude"=> 120.534508,
              "recommendation"=> "Always check for cyclists before opening car doors, especially on busy streets with bike lanes. Drivers should use the \"Dutch Reach\" technique, opening the door with the hand farthest from the door. Cyclists should also ride a safe distance away from parked cars to minimize the risk of collisions."
            ],
            [
              "dateCommitted"=> "2019-12-18",
              "reason"=> "Car Door Collision with a Cyclist",
              "severity"=> "Minor",
              "latitude"=> 14.975044,
              "longitude"=> 120.532356,
              "recommendation"=> "Always check for cyclists before opening car doors, especially on busy streets with bike lanes. Drivers should use the \"Dutch Reach\" technique, opening the door with the hand farthest from the door. Cyclists should also ride a safe distance away from parked cars to minimize the risk of collisions."
            ],
            [
              "dateCommitted"=> "2019-12-18",
              "reason"=> "Distracted Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.977656,
              "longitude"=> 120.527634,
              "recommendation"=> "Avoid distractions while driving, such as using mobile phones, eating, or adjusting the radio, and stay focused on the road at all times."
            ],
            [
              "dateCommitted"=> "2019-12-28",
              "reason"=> "Side Mirror Scraping",
              "severity"=> "Fatal",
              "latitude"=> 15.017161,
              "longitude"=> 120.515968,
              "recommendation"=> "Be cautious when passing parked cars or tight spaces, keeping a safe distance from obstacles to avoid side mirror collisions."
            ],
            [
              "dateCommitted"=> "2019-12-30",
              "reason"=> "Hydroplaning Accident",
              "severity"=> "Serious",
              "latitude"=> 14.999337,
              "longitude"=> 120.514717,
              "recommendation"=> "Drive at reduced speeds during rainy conditions, maintain proper tire tread and inflation, and avoid sudden maneuvers on wet roads to prevent hydroplaning accidents."
            ],
            [
              "dateCommitted"=> "2020-01-17",
              "reason"=> "Cyclist Hit by Turning Vehicle",
              "severity"=> "Moderate",
              "latitude"=> 14.994943,
              "longitude"=> 120.538536,
              "recommendation"=> "Always check your blind spots before turning, yield to cyclists and pedestrians, and signal your intentions clearly to other road users."
            ],
            [
              "dateCommitted"=> "2020-02-09",
              "reason"=> "Drowsy Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.994362,
              "longitude"=> 120.504807,
              "recommendation"=> "Get sufficient rest before long journeys, take regular breaks during extended drives, and avoid driving during peak drowsy hours (late at night or early morning) to prevent accidents caused by driver fatigue."
            ],
            [
              "dateCommitted"=> "2020-02-24",
              "reason"=> "Wrong Way Driving on Highway",
              "severity"=> "Moderate",
              "latitude"=> 14.987812,
              "longitude"=> 120.50901,
              "recommendation"=> "Pay close attention to road signs, especially those indicating one-way streets or highway entrances, and refrain from driving under the influence of alcohol or drugs to prevent wrong-way accidents."
            ],
            [
              "dateCommitted"=> "2020-05-15",
              "reason"=> "Rear End Collision",
              "severity"=> "Moderate",
              "latitude"=> 14.978982,
              "longitude"=> 120.534843,
              "recommendation"=> "Maintain a safe following distance from the vehicle ahead and be attentive to sudden stops, brake early and gradually when necessary."
            ],
            [
              "dateCommitted"=> "2020-07-28",
              "reason"=> "Tricycle Overturns on a Rural Road Due to Excessive Speed",
              "severity"=> "Minor",
              "latitude"=> 14.979894,
              "longitude"=> 120.535835,
              "recommendation"=> "Tricycle drivers should observe speed limits and drive at a safe speed, especially on rural roads. Passengers should also encourage responsible driving behavior. Overloading tricycles with passengers or goods can also contribute to accidents, so adhere to weight limits."
            ],
            [
              "dateCommitted"=> "2020-08-23",
              "reason"=> "Cyclist Hit by Turning Vehicle",
              "severity"=> "Minor",
              "latitude"=> 14.973468,
              "longitude"=> 120.488457,
              "recommendation"=> "Always check your blind spots before turning, yield to cyclists and pedestrians, and signal your intentions clearly to other road users."
            ],
            [
              "dateCommitted"=> "2020-10-05",
              "reason"=> "Intersection Collision between a Turning Vehicle and a Cyclist",
              "severity"=> "Serious",
              "latitude"=> 14.979024,
              "longitude"=> 120.504036,
              "recommendation"=> "Both drivers and cyclists should exercise caution at intersections. Drivers must check their blind spots and use their turn signals well in advance of turning. Cyclists should use hand signals to indicate their intentions and make eye contact with drivers to ensure theyre seen. Always be mindful of each others presence when sharing the road."
            ],
            [
              "dateCommitted"=> "2020-10-09",
              "reason"=> "Cyclist Hit by Turning Vehicle",
              "severity"=> "Minor",
              "latitude"=> 14.984662,
              "longitude"=> 120.50721,
              "recommendation"=> "Always check your blind spots before turning, yield to cyclists and pedestrians, and signal your intentions clearly to other road users."
            ],
            [
              "dateCommitted"=> "2020-10-17",
              "reason"=> "Tricycle Overturns on a Rural Road Due to Excessive Speed",
              "severity"=> "Minor",
              "latitude"=> 14.984289,
              "longitude"=> 120.507294,
              "recommendation"=> "Tricycle drivers should observe speed limits and drive at a safe speed, especially on rural roads. Passengers should also encourage responsible driving behavior. Overloading tricycles with passengers or goods can also contribute to accidents, so adhere to weight limits."
            ],
            [
              "dateCommitted"=> "2020-10-21",
              "reason"=> "Car Door Collision with a Cyclist",
              "severity"=> "Minor",
              "latitude"=> 15.009948,
              "longitude"=> 120.516136,
              "recommendation"=> "Always check for cyclists before opening car doors, especially on busy streets with bike lanes. Drivers should use the \"Dutch Reach\" technique, opening the door with the hand farthest from the door. Cyclists should also ride a safe distance away from parked cars to minimize the risk of collisions."
            ],
            [
              "dateCommitted"=> "2020-10-22",
              "reason"=> "Jeepney Brake Failure",
              "severity"=> "Serious",
              "latitude"=> 14.986569,
              "longitude"=> 120.545319,
              "recommendation"=> "Regular maintenance is crucial for public transportation vehicles like jeepneys. Properly inspect and service brakes to prevent failures. Drivers should maintain a safe following distance and drive at a speed that allows them to stop in time."
            ],
            [
              "dateCommitted"=> "2020-10-24",
              "reason"=> "Biker Skids on Wet Leaves and Falls on a Rainy Day",
              "severity"=> "Fatal",
              "latitude"=> 14.98574,
              "longitude"=> 120.541458,
              "recommendation"=> "During wet and rainy conditions, be cautious when riding over surfaces covered in leaves or other debris. Leaves can become slippery, reducing traction. Slow down and avoid sudden maneuvers. Also, ensure your bikes tires have sufficient tread for improved grip on wet roads."
            ],
            [
              "dateCommitted"=> "2020-11-08",
              "reason"=> "Rollover Crash on Curvy Road",
              "severity"=> "Minor",
              "latitude"=> 14.978609,
              "longitude"=> 120.530815,
              "recommendation"=> "Reduce speed on sharp curves, avoid sudden steering maneuvers, and ensure proper vehicle maintenance, including tire condition and suspension, to prevent rollover accidents."
            ],
            [
              "dateCommitted"=> "2020-11-14",
              "reason"=> "Fender Bender in Heavy Traffic",
              "severity"=> "Serious",
              "latitude"=> 14.984662,
              "longitude"=> 120.506866,
              "recommendation"=> "Increase following distance in congested traffic, avoid tailgating, and drive at a reasonable speed to minimize the risk of minor rear-end collisions."
            ],
            [
              "dateCommitted"=> "2020-11-18",
              "reason"=> "Sudden Lane Change Collision",
              "severity"=> "Serious",
              "latitude"=> 14.970981,
              "longitude"=> 120.526955,
              "recommendation"=> "Always use turn signals to indicate lane changes, check blind spots, and be cautious of other drivers when merging or changing lanes, maintaining a safe distance."
            ],
            [
              "dateCommitted"=> "2020-11-28",
              "reason"=> "Rear End Collision",
              "severity"=> "Serious",
              "latitude"=> 14.980433,
              "longitude"=> 120.536224,
              "recommendation"=> "Maintain a safe following distance from the vehicle ahead and be attentive to sudden stops, brake early and gradually when necessary."
            ],
            [
              "dateCommitted"=> "2020-12-13",
              "reason"=> "Car Door Collision with a Cyclist",
              "severity"=> "Minor",
              "latitude"=> 14.956636,
              "longitude"=> 120.523773,
              "recommendation"=> "Always check for cyclists before opening car doors, especially on busy streets with bike lanes. Drivers should use the \"Dutch Reach\" technique, opening the door with the hand farthest from the door. Cyclists should also ride a safe distance away from parked cars to minimize the risk of collisions."
            ],
            [
              "dateCommitted"=> "2020-12-22",
              "reason"=> "Tricycle Overturns on a Rural Road Due to Excessive Speed",
              "severity"=> "Minor",
              "latitude"=> 14.994279,
              "longitude"=> 120.513817,
              "recommendation"=> "Tricycle drivers should observe speed limits and drive at a safe speed, especially on rural roads. Passengers should also encourage responsible driving behavior. Overloading tricycles with passengers or goods can also contribute to accidents, so adhere to weight limits."
            ],
            [
              "dateCommitted"=> "2020-12-23",
              "reason"=> "Hydroplaning Accident",
              "severity"=> "Moderate",
              "latitude"=> 14.989636,
              "longitude"=> 120.510384,
              "recommendation"=> "Drive at reduced speeds during rainy conditions, maintain proper tire tread and inflation, and avoid sudden maneuvers on wet roads to prevent hydroplaning accidents."
            ],
            [
              "dateCommitted"=> "2020-12-31",
              "reason"=> "Biker Skids on Wet Leaves and Falls on a Rainy Day",
              "severity"=> "Fatal",
              "latitude"=> 14.940216,
              "longitude"=> 120.490814,
              "recommendation"=> "During wet and rainy conditions, be cautious when riding over surfaces covered in leaves or other debris. Leaves can become slippery, reducing traction. Slow down and avoid sudden maneuvers. Also, ensure your bikes tires have sufficient tread for improved grip on wet roads."
            ],
            [
              "dateCommitted"=> "2021-01-03",
              "reason"=> "Drowsy Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 15.00315,
              "longitude"=> 120.516052,
              "recommendation"=> "Get sufficient rest before long journeys, take regular breaks during extended drives, and avoid driving during peak drowsy hours (late at night or early morning) to prevent accidents caused by driver fatigue."
            ],
            [
              "dateCommitted"=> "2021-01-03",
              "reason"=> "Parking Lot Accident",
              "severity"=> "Moderate",
              "latitude"=> 15.00315,
              "longitude"=> 120.516052,
              "recommendation"=> "Drive cautiously in parking lots, observe posted speed limits, and be mindful of pedestrians and other vehicles in crowded areas."
            ],
            [
              "dateCommitted"=> "2021-01-10",
              "reason"=> "Sudden Lane Change Collision",
              "severity"=> "Serious",
              "latitude"=> 14.981926,
              "longitude"=> 120.505409,
              "recommendation"=> "Always use turn signals to indicate lane changes, check blind spots, and be cautious of other drivers when merging or changing lanes, maintaining a safe distance."
            ],
            [
              "dateCommitted"=> "2021-01-10",
              "reason"=> "Car Door Collision with a Cyclist",
              "severity"=> "Serious",
              "latitude"=> 14.981926,
              "longitude"=> 120.505409,
              "recommendation"=> "Always check for cyclists before opening car doors, especially on busy streets with bike lanes. Drivers should use the \"Dutch Reach\" technique, opening the door with the hand farthest from the door. Cyclists should also ride a safe distance away from parked cars to minimize the risk of collisions."
            ],
            [
              "dateCommitted"=> "2021-01-13",
              "reason"=> "Merge Lane Collision",
              "severity"=> "Serious",
              "latitude"=> 15.008373,
              "longitude"=> 120.524376,
              "recommendation"=> "Yield to traffic already on the main road when merging, use turn signals to indicate intentions, and communicate with other drivers to safely merge into traffic."
            ],
            [
              "dateCommitted"=> "2021-01-13",
              "reason"=> "Truck Brake Failure",
              "severity"=> "Minor",
              "latitude"=> 15.008373,
              "longitude"=> 120.524376,
              "recommendation"=> "Regularly inspect and maintain the braking system of commercial vehicles, ensuring they are in proper working condition, and drivers should be trained to respond appropriately in case of brake failure emergencies."
            ],
            [
              "dateCommitted"=> "2021-01-13",
              "reason"=> "Rear End Collision",
              "severity"=> "Serious",
              "latitude"=> 14.961072,
              "longitude"=> 120.494553,
              "recommendation"=> "Maintain a safe following distance from the vehicle ahead and be attentive to sudden stops, brake early and gradually when necessary."
            ],
            [
              "dateCommitted"=> "2021-01-13",
              "reason"=> "Wrong Way Driving on Highway",
              "severity"=> "Moderate",
              "latitude"=> 14.961072,
              "longitude"=> 120.494553,
              "recommendation"=> "Pay close attention to road signs, especially those indicating one-way streets or highway entrances, and refrain from driving under the influence of alcohol or drugs to prevent wrong-way accidents."
            ],
            [
              "dateCommitted"=> "2021-01-13",
              "reason"=> "Rollover Crash on Curvy Road",
              "severity"=> "Minor",
              "latitude"=> 14.942289,
              "longitude"=> 120.49073,
              "recommendation"=> "Reduce speed on sharp curves, avoid sudden steering maneuvers, and ensure proper vehicle maintenance, including tire condition and suspension, to prevent rollover accidents."
            ],
            [
              "dateCommitted"=> "2021-01-13",
              "reason"=> "Distracted Driving Crash",
              "severity"=> "Serious",
              "latitude"=> 14.942289,
              "longitude"=> 120.49073,
              "recommendation"=> "Avoid distractions while driving, such as using mobile phones, eating, or adjusting the radio, and stay focused on the road at all times."
            ],
            [
              "dateCommitted"=> "2021-02-04",
              "reason"=> "T Bone Intersection Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.986154,
              "longitude"=> 120.547806,
              "recommendation"=> "Drivers should obey traffic signals and stop signs, approach intersections with caution, and double-check for oncoming traffic before proceeding."
            ],
            [
              "dateCommitted"=> "2021-02-04",
              "reason"=> "Truck Brake Failure",
              "severity"=> "Minor",
              "latitude"=> 14.986154,
              "longitude"=> 120.547806,
              "recommendation"=> "Regularly inspect and maintain the braking system of commercial vehicles, ensuring they are in proper working condition, and drivers should be trained to respond appropriately in case of brake failure emergencies."
            ],
            [
              "dateCommitted"=> "2021-02-20",
              "reason"=> "Rear End Collision",
              "severity"=> "Serious",
              "latitude"=> 14.953899,
              "longitude"=> 120.493477,
              "recommendation"=> "Maintain a safe following distance from the vehicle ahead and be attentive to sudden stops, brake early and gradually when necessary."
            ],
            [
              "dateCommitted"=> "2021-02-20",
              "reason"=> "Tricycle Overturns on a Rural Road Due to Excessive Speed",
              "severity"=> "Minor",
              "latitude"=> 14.953899,
              "longitude"=> 120.493477,
              "recommendation"=> "Tricycle drivers should observe speed limits and drive at a safe speed, especially on rural roads. Passengers should also encourage responsible driving behavior. Overloading tricycles with passengers or goods can also contribute to accidents, so adhere to weight limits."
            ],
            [
              "dateCommitted"=> "2021-03-03",
              "reason"=> "T Bone Intersection Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.985325,
              "longitude"=> 120.538628,
              "recommendation"=> "Drivers should obey traffic signals and stop signs, approach intersections with caution, and double-check for oncoming traffic before proceeding."
            ],
            [
              "dateCommitted"=> "2021-03-03",
              "reason"=> "Drowsy Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.985325,
              "longitude"=> 120.538628,
              "recommendation"=> "Get sufficient rest before long journeys, take regular breaks during extended drives, and avoid driving during peak drowsy hours (late at night or early morning) to prevent accidents caused by driver fatigue."
            ],
            [
              "dateCommitted"=> "2021-03-17",
              "reason"=> "Motorcycle Collides with Pedestrian at a Zebra Crossing",
              "severity"=> "Moderate",
              "latitude"=> 14.943699,
              "longitude"=> 120.491417,
              "recommendation"=> "Both motorcyclists and pedestrians should be aware of their surroundings. Motorcyclists should slow down near pedestrian crossings and yield the right of way. Pedestrians should only cross at designated crossings and look both ways before crossing."
            ],
            [
              "dateCommitted"=> "2021-03-17",
              "reason"=> "Fender Bender in Heavy Traffic",
              "severity"=> "Serious",
              "latitude"=> 14.943699,
              "longitude"=> 120.491417,
              "recommendation"=> "Increase following distance in congested traffic, avoid tailgating, and drive at a reasonable speed to minimize the risk of minor rear-end collisions."
            ],
            [
              "dateCommitted"=> "2021-04-23",
              "reason"=> "Distracted Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 15.01028,
              "longitude"=> 120.516563,
              "recommendation"=> "Avoid distractions while driving, such as using mobile phones, eating, or adjusting the radio, and stay focused on the road at all times."
            ],
            [
              "dateCommitted"=> "2021-04-23",
              "reason"=> "Drowsy Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 15.01028,
              "longitude"=> 120.516563,
              "recommendation"=> "Get sufficient rest before long journeys, take regular breaks during extended drives, and avoid driving during peak drowsy hours (late at night or early morning) to prevent accidents caused by driver fatigue."
            ],
            [
              "dateCommitted"=> "2021-06-08",
              "reason"=> "Cyclist Hit by Turning Vehicle",
              "severity"=> "Minor",
              "latitude"=> 14.97977,
              "longitude"=> 120.513817,
              "recommendation"=> "Always check your blind spots before turning, yield to cyclists and pedestrians, and signal your intentions clearly to other road users."
            ],
            [
              "dateCommitted"=> "2021-06-08",
              "reason"=> "Parking Lot Accident",
              "severity"=> "Moderate",
              "latitude"=> 14.97977,
              "longitude"=> 120.513817,
              "recommendation"=> "Drive cautiously in parking lots, observe posted speed limits, and be mindful of pedestrians and other vehicles in crowded areas."
            ],
            [
              "dateCommitted"=> "2021-06-10",
              "reason"=> "Tricycle Overturns on a Rural Road Due to Excessive Speed",
              "severity"=> "Minor",
              "latitude"=> 14.937065,
              "longitude"=> 120.488411,
              "recommendation"=> "Tricycle drivers should observe speed limits and drive at a safe speed, especially on rural roads. Passengers should also encourage responsible driving behavior. Overloading tricycles with passengers or goods can also contribute to accidents, so adhere to weight limits."
            ],
            [
              "dateCommitted"=> "2021-06-10",
              "reason"=> "Merge Lane Collision",
              "severity"=> "Minor",
              "latitude"=> 14.937065,
              "longitude"=> 120.488411,
              "recommendation"=> "Yield to traffic already on the main road when merging, use turn signals to indicate intentions, and communicate with other drivers to safely merge into traffic."
            ],
            [
              "dateCommitted"=> "2021-06-13",
              "reason"=> "Biker Skids on Wet Leaves and Falls on a Rainy Day",
              "severity"=> "Fatal",
              "latitude"=> 14.975624,
              "longitude"=> 120.482536,
              "recommendation"=> "During wet and rainy conditions, be cautious when riding over surfaces covered in leaves or other debris. Leaves can become slippery, reducing traction. Slow down and avoid sudden maneuvers. Also, ensure your bikes tires have sufficient tread for improved grip on wet roads."
            ],
            [
              "dateCommitted"=> "2021-06-13",
              "reason"=> "Motorcycle Collides with Pedestrian at a Zebra Crossing",
              "severity"=> "Moderate",
              "latitude"=> 14.975624,
              "longitude"=> 120.482536,
              "recommendation"=> "Both motorcyclists and pedestrians should be aware of their surroundings. Motorcyclists should slow down near pedestrian crossings and yield the right of way. Pedestrians should only cross at designated crossings and look both ways before crossing."
            ],
            [
              "dateCommitted"=> "2021-06-13",
              "reason"=> "Parking Lot Accident",
              "severity"=> "Moderate",
              "latitude"=> 14.950582,
              "longitude"=> 120.50901,
              "recommendation"=> "Drive cautiously in parking lots, observe posted speed limits, and be mindful of pedestrians and other vehicles in crowded areas."
            ],
            [
              "dateCommitted"=> "2021-06-13",
              "reason"=> "Cyclist Hit by Turning Vehicle",
              "severity"=> "Minor",
              "latitude"=> 14.950582,
              "longitude"=> 120.50901,
              "recommendation"=> "Always check your blind spots before turning, yield to cyclists and pedestrians, and signal your intentions clearly to other road users."
            ],
            [
              "dateCommitted"=> "2021-06-16",
              "reason"=> "Biker Skids on Wet Leaves and Falls on a Rainy Day",
              "severity"=> "Fatal",
              "latitude"=> 14.977946,
              "longitude"=> 120.534416,
              "recommendation"=> "During wet and rainy conditions, be cautious when riding over surfaces covered in leaves or other debris. Leaves can become slippery, reducing traction. Slow down and avoid sudden maneuvers. Also, ensure your bikes tires have sufficient tread for improved grip on wet roads."
            ],
            [
              "dateCommitted"=> "2021-06-16",
              "reason"=> "Sudden Lane Change Collision",
              "severity"=> "Serious",
              "latitude"=> 14.977946,
              "longitude"=> 120.534416,
              "recommendation"=> "Always use turn signals to indicate lane changes, check blind spots, and be cautious of other drivers when merging or changing lanes, maintaining a safe distance."
            ],
            [
              "dateCommitted"=> "2021-06-26",
              "reason"=> "Car Door Collision with a Cyclist",
              "severity"=> "Serious",
              "latitude"=> 14.975541,
              "longitude"=> 120.458977,
              "recommendation"=> "Always check for cyclists before opening car doors, especially on busy streets with bike lanes. Drivers should use the \"Dutch Reach\" technique, opening the door with the hand farthest from the door. Cyclists should also ride a safe distance away from parked cars to minimize the risk of collisions."
            ],
            [
              "dateCommitted"=> "2021-06-26",
              "reason"=> "T Bone Intersection Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.975541,
              "longitude"=> 120.458977,
              "recommendation"=> "Drivers should obey traffic signals and stop signs, approach intersections with caution, and double-check for oncoming traffic before proceeding."
            ],
            [
              "dateCommitted"=> "2021-11-21",
              "reason"=> "Hydroplaning Accident",
              "severity"=> "Serious",
              "latitude"=> 14.972888,
              "longitude"=> 120.459145,
              "recommendation"=> "Drive at reduced speeds during rainy conditions, maintain proper tire tread and inflation, and avoid sudden maneuvers on wet roads to prevent hydroplaning accidents."
            ],
            [
              "dateCommitted"=> "2021-12-03",
              "reason"=> "Rear End Collision",
              "severity"=> "Serious",
              "latitude"=> 14.939014,
              "longitude"=> 120.489807,
              "recommendation"=> "Maintain a safe following distance from the vehicle ahead and be attentive to sudden stops, brake early and gradually when necessary."
            ],
            [
              "dateCommitted"=> "2021-12-03",
              "reason"=> "Head On Collision",
              "severity"=> "Fatal",
              "latitude"=> 14.939014,
              "longitude"=> 120.489807,
              "recommendation"=> "Always stay in your lane and avoid overtaking in no-passing zones, maintain a safe following distance, and adhere to traffic signs and signals."
            ],
            [
              "dateCommitted"=> "2021-12-14",
              "reason"=> "Hydroplaning Accident",
              "severity"=> "Serious",
              "latitude"=> 14.997347,
              "longitude"=> 120.455109,
              "recommendation"=> "Drive at reduced speeds during rainy conditions, maintain proper tire tread and inflation, and avoid sudden maneuvers on wet roads to prevent hydroplaning accidents."
            ],
            [
              "dateCommitted"=> "2021-12-14",
              "reason"=> "Fender Bender in Heavy Traffic",
              "severity"=> "Serious",
              "latitude"=> 14.997347,
              "longitude"=> 120.455109,
              "recommendation"=> "Increase following distance in congested traffic, avoid tailgating, and drive at a reasonable speed to minimize the risk of minor rear-end collisions."
            ],
            [
              "dateCommitted"=> "2021-12-15",
              "reason"=> "Cyclist Hit by Turning Vehicle",
              "severity"=> "Minor",
              "latitude"=> 14.980889,
              "longitude"=> 120.515968,
              "recommendation"=> "Always check your blind spots before turning, yield to cyclists and pedestrians, and signal your intentions clearly to other road users."
            ],
            [
              "dateCommitted"=> "2021-12-15",
              "reason"=> "Fender Bender in Heavy Traffic",
              "severity"=> "Serious",
              "latitude"=> 14.980889,
              "longitude"=> 120.515968,
              "recommendation"=> "Increase following distance in congested traffic, avoid tailgating, and drive at a reasonable speed to minimize the risk of minor rear-end collisions."
            ],
            [
              "dateCommitted"=> "2021-12-25",
              "reason"=> "Tricycle Overturns on a Rural Road Due to Excessive Speed",
              "severity"=> "Minor",
              "latitude"=> 14.976163,
              "longitude"=> 120.52755,
              "recommendation"=> "Tricycle drivers should observe speed limits and drive at a safe speed, especially on rural roads. Passengers should also encourage responsible driving behavior. Overloading tricycles with passengers or goods can also contribute to accidents, so adhere to weight limits."
            ],
            [
              "dateCommitted"=> "2021-12-25",
              "reason"=> "Truck Brake Failure",
              "severity"=> "Serious",
              "latitude"=> 14.976163,
              "longitude"=> 120.52755,
              "recommendation"=> "Regularly inspect and maintain the braking system of commercial vehicles, ensuring they are in proper working condition, and drivers should be trained to respond appropriately in case of brake failure emergencies."
            ],
            [
              "dateCommitted"=> "2021-12-25",
              "reason"=> "Drowsy Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.966296,
              "longitude"=> 120.526093,
              "recommendation"=> "Get sufficient rest before long journeys, take regular breaks during extended drives, and avoid driving during peak drowsy hours (late at night or early morning) to prevent accidents caused by driver fatigue."
            ],
            [
              "dateCommitted"=> "2021-12-25",
              "reason"=> "Fender Bender in Heavy Traffic",
              "severity"=> "Serious",
              "latitude"=> 14.966296,
              "longitude"=> 120.526093,
              "recommendation"=> "Increase following distance in congested traffic, avoid tailgating, and drive at a reasonable speed to minimize the risk of minor rear-end collisions."
            ],
            [
              "dateCommitted"=> "2021-12-26",
              "reason"=> "Hydroplaning Accident",
              "severity"=> "Serious",
              "latitude"=> 14.961238,
              "longitude"=> 120.494637,
              "recommendation"=> "Drive at reduced speeds during rainy conditions, maintain proper tire tread and inflation, and avoid sudden maneuvers on wet roads to prevent hydroplaning accidents."
            ],
            [
              "dateCommitted"=> "2021-12-26",
              "reason"=> "Hydroplaning Accident",
              "severity"=> "Moderate",
              "latitude"=> 14.961238,
              "longitude"=> 120.494637,
              "recommendation"=> "Drive at reduced speeds during rainy conditions, maintain proper tire tread and inflation, and avoid sudden maneuvers on wet roads to prevent hydroplaning accidents."
            ],
            [
              "dateCommitted"=> "2021-12-28",
              "reason"=> "Parking Lot Accident",
              "severity"=> "Moderate",
              "latitude"=> 15.020311,
              "longitude"=> 120.517769,
              "recommendation"=> "Drive cautiously in parking lots, observe posted speed limits, and be mindful of pedestrians and other vehicles in crowded areas."
            ],
            [
              "dateCommitted"=> "2022-01-16",
              "reason"=> "Sudden Lane Change Collision",
              "severity"=> "Serious",
              "latitude"=> 14.962606,
              "longitude"=> 120.494766,
              "recommendation"=> "Always use turn signals to indicate lane changes, check blind spots, and be cautious of other drivers when merging or changing lanes, maintaining a safe distance."
            ],
            [
              "dateCommitted"=> "2022-01-16",
              "reason"=> "Tricycle Overturns on a Rural Road Due to Excessive Speed",
              "severity"=> "Minor",
              "latitude"=> 14.962606,
              "longitude"=> 120.494766,
              "recommendation"=> "Tricycle drivers should observe speed limits and drive at a safe speed, especially on rural roads. Passengers should also encourage responsible driving behavior. Overloading tricycles with passengers or goods can also contribute to accidents, so adhere to weight limits."
            ],
            [
              "dateCommitted"=> "2022-01-22",
              "reason"=> "Truck Brake Failure",
              "severity"=> "Serious",
              "latitude"=> 15.027606,
              "longitude"=> 120.517082,
              "recommendation"=> "Regularly inspect and maintain the braking system of commercial vehicles, ensuring they are in proper working condition, and drivers should be trained to respond appropriately in case of brake failure emergencies."
            ],
            [
              "dateCommitted"=> "2022-01-22",
              "reason"=> "Sudden Lane Change Collision",
              "severity"=> "Serious",
              "latitude"=> 15.027606,
              "longitude"=> 120.517082,
              "recommendation"=> "Always use turn signals to indicate lane changes, check blind spots, and be cautious of other drivers when merging or changing lanes, maintaining a safe distance."
            ],
            [
              "dateCommitted"=> "2022-01-29",
              "reason"=> "Motorcycle Collides with Pedestrian at a Zebra Crossing",
              "severity"=> "Moderate",
              "latitude"=> 14.995357,
              "longitude"=> 120.514847,
              "recommendation"=> "Both motorcyclists and pedestrians should be aware of their surroundings. Motorcyclists should slow down near pedestrian crossings and yield the right of way. Pedestrians should only cross at designated crossings and look both ways before crossing."
            ],
            [
              "dateCommitted"=> "2022-01-29",
              "reason"=> "Side Mirror Scraping",
              "severity"=> "Serious",
              "latitude"=> 14.995357,
              "longitude"=> 120.514847,
              "recommendation"=> "Be cautious when passing parked cars or tight spaces, keeping a safe distance from obstacles to avoid side mirror collisions."
            ],
            [
              "dateCommitted"=> "2022-01-30",
              "reason"=> "Car Door Collision with a Cyclist",
              "severity"=> "Serious",
              "latitude"=> 14.976868,
              "longitude"=> 120.520767,
              "recommendation"=> "Always check for cyclists before opening car doors, especially on busy streets with bike lanes. Drivers should use the \"Dutch Reach\" technique, opening the door with the hand farthest from the door. Cyclists should also ride a safe distance away from parked cars to minimize the risk of collisions."
            ],
            [
              "dateCommitted"=> "2022-01-30",
              "reason"=> "T Bone Intersection Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.976868,
              "longitude"=> 120.520767,
              "recommendation"=> "Drivers should obey traffic signals and stop signs, approach intersections with caution, and double-check for oncoming traffic before proceeding."
            ],
            [
              "dateCommitted"=> "2022-02-04",
              "reason"=> "Distracted Driving Crash",
              "severity"=> "Serious",
              "latitude"=> 15.010943,
              "longitude"=> 120.516396,
              "recommendation"=> "Avoid distractions while driving, such as using mobile phones, eating, or adjusting the radio, and stay focused on the road at all times."
            ],
            [
              "dateCommitted"=> "2022-02-04",
              "reason"=> "Wrong Way Driving on Highway",
              "severity"=> "Moderate",
              "latitude"=> 15.010943,
              "longitude"=> 120.516396,
              "recommendation"=> "Pay close attention to road signs, especially those indicating one-way streets or highway entrances, and refrain from driving under the influence of alcohol or drugs to prevent wrong-way accidents."
            ],
            [
              "dateCommitted"=> "2022-03-03",
              "reason"=> "Head On Collision",
              "severity"=> "Fatal",
              "latitude"=> 14.984247,
              "longitude"=> 120.555359,
              "recommendation"=> "Always stay in your lane and avoid overtaking in no-passing zones, maintain a safe following distance, and adhere to traffic signs and signals."
            ],
            [
              "dateCommitted"=> "2022-03-03",
              "reason"=> "Side Mirror Scraping",
              "severity"=> "Serious",
              "latitude"=> 14.984247,
              "longitude"=> 120.555359,
              "recommendation"=> "Be cautious when passing parked cars or tight spaces, keeping a safe distance from obstacles to avoid side mirror collisions."
            ],
            [
              "dateCommitted"=> "2022-03-11",
              "reason"=> "Merge Lane Collision",
              "severity"=> "Minor",
              "latitude"=> 14.974049,
              "longitude"=> 120.501457,
              "recommendation"=> "Yield to traffic already on the main road when merging, use turn signals to indicate intentions, and communicate with other drivers to safely merge into traffic."
            ],
            [
              "dateCommitted"=> "2022-03-11",
              "reason"=> "Head On Collision",
              "severity"=> "Fatal",
              "latitude"=> 14.974049,
              "longitude"=> 120.501457,
              "recommendation"=> "Always stay in your lane and avoid overtaking in no-passing zones, maintain a safe following distance, and adhere to traffic signs and signals."
            ],
            [
              "dateCommitted"=> "2022-03-13",
              "reason"=> "Tricycle Overturns on a Rural Road Due to Excessive Speed",
              "severity"=> "Minor",
              "latitude"=> 14.928274,
              "longitude"=> 120.508499,
              "recommendation"=> "Tricycle drivers should observe speed limits and drive at a safe speed, especially on rural roads. Passengers should also encourage responsible driving behavior. Overloading tricycles with passengers or goods can also contribute to accidents, so adhere to weight limits."
            ],
            [
              "dateCommitted"=> "2022-03-13",
              "reason"=> "Tricycle Overturns on a Rural Road Due to Excessive Speed",
              "severity"=> "Minor",
              "latitude"=> 14.928274,
              "longitude"=> 120.508499,
              "recommendation"=> "Tricycle drivers should observe speed limits and drive at a safe speed, especially on rural roads. Passengers should also encourage responsible driving behavior. Overloading tricycles with passengers or goods can also contribute to accidents, so adhere to weight limits."
            ],
            [
              "dateCommitted"=> "2022-03-13",
              "reason"=> "Head On Collision",
              "severity"=> "Fatal",
              "latitude"=> 14.955309,
              "longitude"=> 120.523346,
              "recommendation"=> "Always stay in your lane and avoid overtaking in no-passing zones, maintain a safe following distance, and adhere to traffic signs and signals."
            ],
            [
              "dateCommitted"=> "2022-03-13",
              "reason"=> "Merge Lane Collision",
              "severity"=> "Minor",
              "latitude"=> 14.955309,
              "longitude"=> 120.523346,
              "recommendation"=> "Yield to traffic already on the main road when merging, use turn signals to indicate intentions, and communicate with other drivers to safely merge into traffic."
            ],
            [
              "dateCommitted"=> "2022-03-19",
              "reason"=> "Biker Skids on Wet Leaves and Falls on a Rainy Day",
              "severity"=> "Fatal",
              "latitude"=> 14.986817,
              "longitude"=> 120.50901,
              "recommendation"=> "During wet and rainy conditions, be cautious when riding over surfaces covered in leaves or other debris. Leaves can become slippery, reducing traction. Slow down and avoid sudden maneuvers. Also, ensure your bikes tires have sufficient tread for improved grip on wet roads."
            ],
            [
              "dateCommitted"=> "2022-03-20",
              "reason"=> "Hydroplaning Accident",
              "severity"=> "Serious",
              "latitude"=> 14.979231,
              "longitude"=> 120.503777,
              "recommendation"=> "Drive at reduced speeds during rainy conditions, maintain proper tire tread and inflation, and avoid sudden maneuvers on wet roads to prevent hydroplaning accidents."
            ],
            [
              "dateCommitted"=> "2022-03-20",
              "reason"=> "Side Mirror Scraping",
              "severity"=> "Fatal",
              "latitude"=> 14.979231,
              "longitude"=> 120.503777,
              "recommendation"=> "Be cautious when passing parked cars or tight spaces, keeping a safe distance from obstacles to avoid side mirror collisions."
            ],
            [
              "dateCommitted"=> "2022-03-27",
              "reason"=> "Cyclist Hit by Turning Vehicle",
              "severity"=> "Minor",
              "latitude"=> 14.976204,
              "longitude"=> 120.502014,
              "recommendation"=> "Always check your blind spots before turning, yield to cyclists and pedestrians, and signal your intentions clearly to other road users."
            ],
            [
              "dateCommitted"=> "2022-04-11",
              "reason"=> "Parking Lot Accident",
              "severity"=> "Moderate",
              "latitude"=> 15.000249,
              "longitude"=> 120.514763,
              "recommendation"=> "Drive cautiously in parking lots, observe posted speed limits, and be mindful of pedestrians and other vehicles in crowded areas."
            ],
            [
              "dateCommitted"=> "2022-04-11",
              "reason"=> "Motorcycle Collides with Pedestrian at a Zebra Crossing",
              "severity"=> "Moderate",
              "latitude"=> 15.000249,
              "longitude"=> 120.514763,
              "recommendation"=> "Both motorcyclists and pedestrians should be aware of their surroundings. Motorcyclists should slow down near pedestrian crossings and yield the right of way. Pedestrians should only cross at designated crossings and look both ways before crossing."
            ],
            [
              "dateCommitted"=> "2022-04-12",
              "reason"=> "Rollover Crash on Curvy Road",
              "severity"=> "Minor",
              "latitude"=> 14.935323,
              "longitude"=> 120.488068,
              "recommendation"=> "Reduce speed on sharp curves, avoid sudden steering maneuvers, and ensure proper vehicle maintenance, including tire condition and suspension, to prevent rollover accidents."
            ],
            [
              "dateCommitted"=> "2022-04-12",
              "reason"=> "T Bone Intersection Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.935323,
              "longitude"=> 120.488068,
              "recommendation"=> "Drivers should obey traffic signals and stop signs, approach intersections with caution, and double-check for oncoming traffic before proceeding."
            ],
            [
              "dateCommitted"=> "2022-04-17",
              "reason"=> "Hydroplaning Accident",
              "severity"=> "Serious",
              "latitude"=> 14.917409,
              "longitude"=> 120.492622,
              "recommendation"=> "Drive at reduced speeds during rainy conditions, maintain proper tire tread and inflation, and avoid sudden maneuvers on wet roads to prevent hydroplaning accidents."
            ],
            [
              "dateCommitted"=> "2022-04-17",
              "reason"=> "Parking Lot Accident",
              "severity"=> "Moderate",
              "latitude"=> 14.917409,
              "longitude"=> 120.492622,
              "recommendation"=> "Drive cautiously in parking lots, observe posted speed limits, and be mindful of pedestrians and other vehicles in crowded areas."
            ],
            [
              "dateCommitted"=> "2022-04-24",
              "reason"=> "Hydroplaning Accident",
              "severity"=> "Serious",
              "latitude"=> 14.922303,
              "longitude"=> 120.479958,
              "recommendation"=> "Drive at reduced speeds during rainy conditions, maintain proper tire tread and inflation, and avoid sudden maneuvers on wet roads to prevent hydroplaning accidents."
            ],
            [
              "dateCommitted"=> "2022-04-24",
              "reason"=> "Rear End Collision",
              "severity"=> "Moderate",
              "latitude"=> 14.922303,
              "longitude"=> 120.479958,
              "recommendation"=> "Maintain a safe following distance from the vehicle ahead and be attentive to sudden stops, brake early and gradually when necessary."
            ],
            [
              "dateCommitted"=> "2022-04-24",
              "reason"=> "Intersection Collision between a Turning Vehicle and a Cyclist",
              "severity"=> "Serious",
              "latitude"=> 14.922303,
              "longitude"=> 120.479958,
              "recommendation"=> "Both drivers and cyclists should exercise caution at intersections. Drivers must check their blind spots and use their turn signals well in advance of turning. Cyclists should use hand signals to indicate their intentions and make eye contact with drivers to ensure theyre seen. Always be mindful of each others presence when sharing the road."
            ],
            [
              "dateCommitted"=> "2022-05-21",
              "reason"=> "Drowsy Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.988559,
              "longitude"=> 120.509956,
              "recommendation"=> "Get sufficient rest before long journeys, take regular breaks during extended drives, and avoid driving during peak drowsy hours (late at night or early morning) to prevent accidents caused by driver fatigue."
            ],
            [
              "dateCommitted"=> "2022-07-16",
              "reason"=> "Car Door Collision with a Cyclist",
              "severity"=> "Serious",
              "latitude"=> 14.978941,
              "longitude"=> 120.458717,
              "recommendation"=> "Always check for cyclists before opening car doors, especially on busy streets with bike lanes. Drivers should use the \"Dutch Reach\" technique, opening the door with the hand farthest from the door. Cyclists should also ride a safe distance away from parked cars to minimize the risk of collisions."
            ],
            [
              "dateCommitted"=> "2022-07-16",
              "reason"=> "Motorcycle Collides with Pedestrian at a Zebra Crossing",
              "severity"=> "Moderate",
              "latitude"=> 14.978941,
              "longitude"=> 120.458717,
              "recommendation"=> "Both motorcyclists and pedestrians should be aware of their surroundings. Motorcyclists should slow down near pedestrian crossings and yield the right of way. Pedestrians should only cross at designated crossings and look both ways before crossing."
            ],
            [
              "dateCommitted"=> "2022-07-16",
              "reason"=> "Biker Skids on Wet Leaves and Falls on a Rainy Day",
              "severity"=> "Fatal",
              "latitude"=> 14.978941,
              "longitude"=> 120.458717,
              "recommendation"=> "During wet and rainy conditions, be cautious when riding over surfaces covered in leaves or other debris. Leaves can become slippery, reducing traction. Slow down and avoid sudden maneuvers. Also, ensure your bikes tires have sufficient tread for improved grip on wet roads."
            ],
            [
              "dateCommitted"=> "2022-07-26",
              "reason"=> "Sudden Lane Change Collision",
              "severity"=> "Serious",
              "latitude"=> 14.980392,
              "longitude"=> 120.536346,
              "recommendation"=> "Always use turn signals to indicate lane changes, check blind spots, and be cautious of other drivers when merging or changing lanes, maintaining a safe distance."
            ],
            [
              "dateCommitted"=> "2022-07-26",
              "reason"=> "Rollover Crash on Curvy Road",
              "severity"=> "Minor",
              "latitude"=> 14.980392,
              "longitude"=> 120.536346,
              "recommendation"=> "Reduce speed on sharp curves, avoid sudden steering maneuvers, and ensure proper vehicle maintenance, including tire condition and suspension, to prevent rollover accidents."
            ],
            [
              "dateCommitted"=> "2022-08-07",
              "reason"=> "Hydroplaning Accident",
              "severity"=> "Serious",
              "latitude"=> 14.973551,
              "longitude"=> 120.500427,
              "recommendation"=> "Drive at reduced speeds during rainy conditions, maintain proper tire tread and inflation, and avoid sudden maneuvers on wet roads to prevent hydroplaning accidents."
            ],
            [
              "dateCommitted"=> "2022-08-07",
              "reason"=> "Car Door Collision with a Cyclist",
              "severity"=> "Serious",
              "latitude"=> 14.973551,
              "longitude"=> 120.500427,
              "recommendation"=> "Always check for cyclists before opening car doors, especially on busy streets with bike lanes. Drivers should use the \"Dutch Reach\" technique, opening the door with the hand farthest from the door. Cyclists should also ride a safe distance away from parked cars to minimize the risk of collisions."
            ],
            [
              "dateCommitted"=> "2022-08-22",
              "reason"=> "Head On Collision",
              "severity"=> "Fatal",
              "latitude"=> 14.962191,
              "longitude"=> 120.494507,
              "recommendation"=> "Always stay in your lane and avoid overtaking in no-passing zones, maintain a safe following distance, and adhere to traffic signs and signals."
            ],
            [
              "dateCommitted"=> "2022-08-22",
              "reason"=> "Distracted Driving Crash",
              "severity"=> "Serious",
              "latitude"=> 14.962191,
              "longitude"=> 120.494507,
              "recommendation"=> "Avoid distractions while driving, such as using mobile phones, eating, or adjusting the radio, and stay focused on the road at all times."
            ],
            [
              "dateCommitted"=> "2022-08-22",
              "reason"=> "Fender Bender in Heavy Traffic",
              "severity"=> "Serious",
              "latitude"=> 14.962191,
              "longitude"=> 120.494507,
              "recommendation"=> "Increase following distance in congested traffic, avoid tailgating, and drive at a reasonable speed to minimize the risk of minor rear-end collisions."
            ],
            [
              "dateCommitted"=> "2022-09-21",
              "reason"=> "Distracted Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.987647,
              "longitude"=> 120.50927,
              "recommendation"=> "Avoid distractions while driving, such as using mobile phones, eating, or adjusting the radio, and stay focused on the road at all times."
            ],
            [
              "dateCommitted"=> "2022-09-25",
              "reason"=> "Drowsy Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.986693,
              "longitude"=> 120.508537,
              "recommendation"=> "Get sufficient rest before long journeys, take regular breaks during extended drives, and avoid driving during peak drowsy hours (late at night or early morning) to prevent accidents caused by driver fatigue."
            ],
            [
              "dateCommitted"=> "2022-10-07",
              "reason"=> "Rollover Crash on Curvy Road",
              "severity"=> "Minor",
              "latitude"=> 14.974961,
              "longitude"=> 120.52729,
              "recommendation"=> "Reduce speed on sharp curves, avoid sudden steering maneuvers, and ensure proper vehicle maintenance, including tire condition and suspension, to prevent rollover accidents."
            ],
            [
              "dateCommitted"=> "2022-11-09",
              "reason"=> "Sudden Lane Change Collision",
              "severity"=> "Serious",
              "latitude"=> 14.983418,
              "longitude"=> 120.537598,
              "recommendation"=> "Always use turn signals to indicate lane changes, check blind spots, and be cautious of other drivers when merging or changing lanes, maintaining a safe distance."
            ],
            [
              "dateCommitted"=> "2022-11-09",
              "reason"=> "Hydroplaning Accident",
              "severity"=> "Serious",
              "latitude"=> 14.983418,
              "longitude"=> 120.537598,
              "recommendation"=> "Drive at reduced speeds during rainy conditions, maintain proper tire tread and inflation, and avoid sudden maneuvers on wet roads to prevent hydroplaning accidents."
            ],
            [
              "dateCommitted"=> "2022-11-11",
              "reason"=> "Drowsy Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.93269,
              "longitude"=> 120.492424,
              "recommendation"=> "Get sufficient rest before long journeys, take regular breaks during extended drives, and avoid driving during peak drowsy hours (late at night or early morning) to prevent accidents caused by driver fatigue."
            ],
            [
              "dateCommitted"=> "2022-11-17",
              "reason"=> "Fender Bender in Heavy Traffic",
              "severity"=> "Serious",
              "latitude"=> 14.969654,
              "longitude"=> 120.498451,
              "recommendation"=> "Increase following distance in congested traffic, avoid tailgating, and drive at a reasonable speed to minimize the risk of minor rear-end collisions."
            ],
            [
              "dateCommitted"=> "2022-11-21",
              "reason"=> "Tricycle Overturns on a Rural Road Due to Excessive Speed",
              "severity"=> "Minor",
              "latitude"=> 14.991046,
              "longitude"=> 120.511497,
              "recommendation"=> "Tricycle drivers should observe speed limits and drive at a safe speed, especially on rural roads. Passengers should also encourage responsible driving behavior. Overloading tricycles with passengers or goods can also contribute to accidents, so adhere to weight limits."
            ],
            [
              "dateCommitted"=> "2022-11-21",
              "reason"=> "Merge Lane Collision",
              "severity"=> "Serious",
              "latitude"=> 14.977863,
              "longitude"=> 120.519737,
              "recommendation"=> "Yield to traffic already on the main road when merging, use turn signals to indicate intentions, and communicate with other drivers to safely merge into traffic."
            ],
            [
              "dateCommitted"=> "2022-11-25",
              "reason"=> "Drowsy Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.975458,
              "longitude"=> 120.519913,
              "recommendation"=> "Get sufficient rest before long journeys, take regular breaks during extended drives, and avoid driving during peak drowsy hours (late at night or early morning) to prevent accidents caused by driver fatigue."
            ],
            [
              "dateCommitted"=> "2022-11-25",
              "reason"=> "Tricycle Overturns on a Rural Road Due to Excessive Speed",
              "severity"=> "Minor",
              "latitude"=> 14.975458,
              "longitude"=> 120.519913,
              "recommendation"=> "Tricycle drivers should observe speed limits and drive at a safe speed, especially on rural roads. Passengers should also encourage responsible driving behavior. Overloading tricycles with passengers or goods can also contribute to accidents, so adhere to weight limits."
            ],
            [
              "dateCommitted"=> "2022-12-02",
              "reason"=> "Tricycle Overturns on a Rural Road Due to Excessive Speed",
              "severity"=> "Minor",
              "latitude"=> 14.979189,
              "longitude"=> 120.535278,
              "recommendation"=> "Tricycle drivers should observe speed limits and drive at a safe speed, especially on rural roads. Passengers should also encourage responsible driving behavior. Overloading tricycles with passengers or goods can also contribute to accidents, so adhere to weight limits."
            ],
            [
              "dateCommitted"=> "2022-12-16",
              "reason"=> "Tricycle Overturns on a Rural Road Due to Excessive Speed",
              "severity"=> "Minor",
              "latitude"=> 14.938558,
              "longitude"=> 120.489998,
              "recommendation"=> "Tricycle drivers should observe speed limits and drive at a safe speed, especially on rural roads. Passengers should also encourage responsible driving behavior. Overloading tricycles with passengers or goods can also contribute to accidents, so adhere to weight limits."
            ],
            [
              "dateCommitted"=> "2022-12-18",
              "reason"=> "Drowsy Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.992663,
              "longitude"=> 120.512192,
              "recommendation"=> "Get sufficient rest before long journeys, take regular breaks during extended drives, and avoid driving during peak drowsy hours (late at night or early morning) to prevent accidents caused by driver fatigue."
            ],
            [
              "dateCommitted"=> "2022-12-19",
              "reason"=> "Motorcycle Collides with Pedestrian at a Zebra Crossing",
              "severity"=> "Moderate",
              "latitude"=> 15.014011,
              "longitude"=> 120.516563,
              "recommendation"=> "Both motorcyclists and pedestrians should be aware of their surroundings. Motorcyclists should slow down near pedestrian crossings and yield the right of way. Pedestrians should only cross at designated crossings and look both ways before crossing."
            ],
            [
              "dateCommitted"=> "2022-12-23",
              "reason"=> "Distracted Driving Crash",
              "severity"=> "Serious",
              "latitude"=> 14.973966,
              "longitude"=> 120.500687,
              "recommendation"=> "Avoid distractions while driving, such as using mobile phones, eating, or adjusting the radio, and stay focused on the road at all times."
            ],
            [
              "dateCommitted"=> "2022-12-23",
              "reason"=> "Head On Collision",
              "severity"=> "Fatal",
              "latitude"=> 14.976868,
              "longitude"=> 120.502319,
              "recommendation"=> "Always stay in your lane and avoid overtaking in no-passing zones, maintain a safe following distance, and adhere to traffic signs and signals."
            ],
            [
              "dateCommitted"=> "2022-12-25",
              "reason"=> "Distracted Driving Crash",
              "severity"=> "Serious",
              "latitude"=> 14.931343,
              "longitude"=> 120.50309,
              "recommendation"=> "Avoid distractions while driving, such as using mobile phones, eating, or adjusting the radio, and stay focused on the road at all times."
            ],
            [
              "dateCommitted"=> "2022-12-25",
              "reason"=> "Merge Lane Collision",
              "severity"=> "Minor",
              "latitude"=> 14.931343,
              "longitude"=> 120.50309,
              "recommendation"=> "Yield to traffic already on the main road when merging, use turn signals to indicate intentions, and communicate with other drivers to safely merge into traffic."
            ],
            [
              "dateCommitted"=> "2022-12-29",
              "reason"=> "Rollover Crash on Curvy Road",
              "severity"=> "Moderate",
              "latitude"=> 15.014011,
              "longitude"=> 120.51622,
              "recommendation"=> "Reduce speed on sharp curves, avoid sudden steering maneuvers, and ensure proper vehicle maintenance, including tire condition and suspension, to prevent rollover accidents."
            ],
            [
              "dateCommitted"=> "2023-01-02",
              "reason"=> "Drowsy Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.971644,
              "longitude"=> 120.499229,
              "recommendation"=> "Get sufficient rest before long journeys, take regular breaks during extended drives, and avoid driving during peak drowsy hours (late at night or early morning) to prevent accidents caused by driver fatigue."
            ],
            [
              "dateCommitted"=> "2023-01-02",
              "reason"=> "Wrong Way Driving on Highway",
              "severity"=> "Moderate",
              "latitude"=> 14.971644,
              "longitude"=> 120.499229,
              "recommendation"=> "Pay close attention to road signs, especially those indicating one-way streets or highway entrances, and refrain from driving under the influence of alcohol or drugs to prevent wrong-way accidents."
            ],
            [
              "dateCommitted"=> "2023-01-02",
              "reason"=> "Fender Bender in Heavy Traffic",
              "severity"=> "Serious",
              "latitude"=> 14.971644,
              "longitude"=> 120.499229,
              "recommendation"=> "Increase following distance in congested traffic, avoid tailgating, and drive at a reasonable speed to minimize the risk of minor rear-end collisions."
            ],
            [
              "dateCommitted"=> "2023-01-02",
              "reason"=> "Sudden Lane Change Collision",
              "severity"=> "Serious",
              "latitude"=> 14.960533,
              "longitude"=> 120.494423,
              "recommendation"=> "Always use turn signals to indicate lane changes, check blind spots, and be cautious of other drivers when merging or changing lanes, maintaining a safe distance."
            ],
            [
              "dateCommitted"=> "2023-01-02",
              "reason"=> "Head On Collision",
              "severity"=> "Fatal",
              "latitude"=> 14.960533,
              "longitude"=> 120.494423,
              "recommendation"=> "Always stay in your lane and avoid overtaking in no-passing zones, maintain a safe following distance, and adhere to traffic signs and signals."
            ],
            [
              "dateCommitted"=> "2023-01-03",
              "reason"=> "Sudden Lane Change Collision",
              "severity"=> "Serious",
              "latitude"=> 14.983833,
              "longitude"=> 120.538963,
              "recommendation"=> "Always use turn signals to indicate lane changes, check blind spots, and be cautious of other drivers when merging or changing lanes, maintaining a safe distance."
            ],
            [
              "dateCommitted"=> "2023-01-08",
              "reason"=> "T Bone Intersection Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.937397,
              "longitude"=> 120.489014,
              "recommendation"=> "Drivers should obey traffic signals and stop signs, approach intersections with caution, and double-check for oncoming traffic before proceeding."
            ],
            [
              "dateCommitted"=> "2023-01-08",
              "reason"=> "Rollover Crash on Curvy Road",
              "severity"=> "Minor",
              "latitude"=> 14.937397,
              "longitude"=> 120.489014,
              "recommendation"=> "Reduce speed on sharp curves, avoid sudden steering maneuvers, and ensure proper vehicle maintenance, including tire condition and suspension, to prevent rollover accidents."
            ],
            [
              "dateCommitted"=> "2023-01-12",
              "reason"=> "Motorcycle Collides with Pedestrian at a Zebra Crossing",
              "severity"=> "Moderate",
              "latitude"=> 14.977863,
              "longitude"=> 120.529266,
              "recommendation"=> "Both motorcyclists and pedestrians should be aware of their surroundings. Motorcyclists should slow down near pedestrian crossings and yield the right of way. Pedestrians should only cross at designated crossings and look both ways before crossing."
            ],
            [
              "dateCommitted"=> "2023-01-15",
              "reason"=> "Side Mirror Scraping",
              "severity"=> "Serious",
              "latitude"=> 14.986734,
              "longitude"=> 120.508583,
              "recommendation"=> "Be cautious when passing parked cars or tight spaces, keeping a safe distance from obstacles to avoid side mirror collisions."
            ],
            [
              "dateCommitted"=> "2023-01-15",
              "reason"=> "Merge Lane Collision",
              "severity"=> "Minor",
              "latitude"=> 14.973468,
              "longitude"=> 120.532784,
              "recommendation"=> "Yield to traffic already on the main road when merging, use turn signals to indicate intentions, and communicate with other drivers to safely merge into traffic."
            ],
            [
              "dateCommitted"=> "2023-01-28",
              "reason"=> "Drowsy Driving Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.965176,
              "longitude"=> 120.495537,
              "recommendation"=> "Get sufficient rest before long journeys, take regular breaks during extended drives, and avoid driving during peak drowsy hours (late at night or early morning) to prevent accidents caused by driver fatigue."
            ],
            [
              "dateCommitted"=> "2023-01-28",
              "reason"=> "Jeepney Brake Failure",
              "severity"=> "Serious",
              "latitude"=> 14.965176,
              "longitude"=> 120.495537,
              "recommendation"=> "Regular maintenance is crucial for public transportation vehicles like jeepneys. Properly inspect and service brakes to prevent failures. Drivers should maintain a safe following distance and drive at a speed that allows them to stop in time."
            ],
            [
              "dateCommitted"=> "2023-02-05",
              "reason"=> "Cyclist Hit by Turning Vehicle",
              "severity"=> "Minor",
              "latitude"=> 14.978609,
              "longitude"=> 120.503517,
              "recommendation"=> "Always check your blind spots before turning, yield to cyclists and pedestrians, and signal your intentions clearly to other road users."
            ],
            [
              "dateCommitted"=> "2023-02-05",
              "reason"=> "Rear End Collision",
              "severity"=> "Moderate",
              "latitude"=> 14.978609,
              "longitude"=> 120.503517,
              "recommendation"=> "Maintain a safe following distance from the vehicle ahead and be attentive to sudden stops, brake early and gradually when necessary."
            ],
            [
              "dateCommitted"=> "2023-02-11",
              "reason"=> "T Bone Intersection Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.979438,
              "longitude"=> 120.535706,
              "recommendation"=> "Drivers should obey traffic signals and stop signs, approach intersections with caution, and double-check for oncoming traffic before proceeding."
            ],
            [
              "dateCommitted"=> "2023-02-11",
              "reason"=> "Tricycle Overturns on a Rural Road Due to Excessive Speed",
              "severity"=> "Minor",
              "latitude"=> 14.979438,
              "longitude"=> 120.535706,
              "recommendation"=> "Tricycle drivers should observe speed limits and drive at a safe speed, especially on rural roads. Passengers should also encourage responsible driving behavior. Overloading tricycles with passengers or goods can also contribute to accidents, so adhere to weight limits."
            ],
            [
              "dateCommitted"=> "2023-02-12",
              "reason"=> "T Bone Intersection Crash",
              "severity"=> "Fatal",
              "latitude"=> 14.978692,
              "longitude"=> 120.51725,
              "recommendation"=> "Drivers should obey traffic signals and stop signs, approach intersections with caution, and double-check for oncoming traffic before proceeding."
            ],
            [
              "dateCommitted"=> "2023-02-12",
              "reason"=> "Car Door Collision with a Cyclist",
              "severity"=> "Serious",
              "latitude"=> 14.978692,
              "longitude"=> 120.51725,
              "recommendation"=> "Always check for cyclists before opening car doors, especially on busy streets with bike lanes. Drivers should use the \"Dutch Reach\" technique, opening the door with the hand farthest from the door. Cyclists should also ride a safe distance away from parked cars to minimize the risk of collisions."
            ],
            [
              "dateCommitted"=> "2023-02-19",
              "reason"=> "Biker Skids on Wet Leaves and Falls on a Rainy Day",
              "severity"=> "Fatal",
              "latitude"=> 14.9903,
              "longitude"=> 120.510559,
              "recommendation"=> "During wet and rainy conditions, be cautious when riding over surfaces covered in leaves or other debris. Leaves can become slippery, reducing traction. Slow down and avoid sudden maneuvers. Also, ensure your bikes tires have sufficient tread for improved grip on wet roads."
            ],
            [
              "dateCommitted"=> "2023-02-19",
              "reason"=> "Head On Collision",
              "severity"=> "Fatal",
              "latitude"=> 14.989553,
              "longitude"=> 120.510468,
              "recommendation"=> "Always stay in your lane and avoid overtaking in no-passing zones, maintain a safe following distance, and adhere to traffic signs and signals."
            ],
            [
              "dateCommitted"=> "2023-02-21",
              "reason"=> "Jeepney Brake Failure",
              "severity"=> "Fatal",
              "latitude"=> 14.977573,
              "longitude"=> 120.533859,
              "recommendation"=> "Regular maintenance is crucial for public transportation vehicles like jeepneys. Properly inspect and service brakes to prevent failures. Drivers should maintain a safe following distance and drive at a speed that allows them to stop in time."
            ],
            [
              "dateCommitted"=> "2023-02-23",
              "reason"=> "Motorcycle Collides with Pedestrian at a Zebra Crossing",
              "severity"=> "Moderate",
              "latitude"=> 14.978194,
              "longitude"=> 120.534164,
              "recommendation"=> "Both motorcyclists and pedestrians should be aware of their surroundings. Motorcyclists should slow down near pedestrian crossings and yield the right of way. Pedestrians should only cross at designated crossings and look both ways before crossing."
            ],
            [
              "dateCommitted"=> "2023-02-25",
              "reason"=> "Cyclist Hit by Turning Vehicle",
              "severity"=> "Moderate",
              "latitude"=> 14.93607,
              "longitude"=> 120.489441,
              "recommendation"=> "Always check your blind spots before turning, yield to cyclists and pedestrians, and signal your intentions clearly to other road users."
            ],
            [
              "dateCommitted"=> "2023-02-25",
              "reason"=> "Sudden Lane Change Collision",
              "severity"=> "Serious",
              "latitude"=> 14.93607,
              "longitude"=> 120.489441,
              "recommendation"=> "Always use turn signals to indicate lane changes, check blind spots, and be cautious of other drivers when merging or changing lanes, maintaining a safe distance."
            ],
            [
              "dateCommitted"=> "2023-03-01",
              "reason"=> "Car Door Collision with a Cyclist",
              "severity"=> "Serious",
              "latitude"=> 14.981262,
              "longitude"=> 120.537079,
              "recommendation"=> "Always check for cyclists before opening car doors, especially on busy streets with bike lanes. Drivers should use the \"Dutch Reach\" technique, opening the door with the hand farthest from the door. Cyclists should also ride a safe distance away from parked cars to minimize the risk of collisions."
            ],
            [
              "dateCommitted"=> "2023-03-07",
              "reason"=> "Truck Brake Failure",
              "severity"=> "Serious",
              "latitude"=> 14.982423,
              "longitude"=> 120.537933,
              "recommendation"=> "Regularly inspect and maintain the braking system of commercial vehicles, ensuring they are in proper working condition, and drivers should be trained to respond appropriately in case of brake failure emergencies."
            ],
            [
              "dateCommitted"=> "2023-03-07",
              "reason"=> "Biker Skids on Wet Leaves and Falls on a Rainy Day",
              "severity"=> "Fatal",
              "latitude"=> 14.982423,
              "longitude"=> 120.537933,
              "recommendation"=> "During wet and rainy conditions, be cautious when riding over surfaces covered in leaves or other debris. Leaves can become slippery, reducing traction. Slow down and avoid sudden maneuvers. Also, ensure your bikes tires have sufficient tread for improved grip on wet roads."
            ],
            [
              "dateCommitted"=> "2023-03-08",
              "reason"=> "Fender Bender in Heavy Traffic",
              "severity"=> "Serious",
              "latitude"=> 14.972971,
              "longitude"=> 120.533134,
              "recommendation"=> "Increase following distance in congested traffic, avoid tailgating, and drive at a reasonable speed to minimize the risk of minor rear-end collisions."
            ],
            [
              "dateCommitted"=> "2023-03-08",
              "reason"=> "Parking Lot Accident",
              "severity"=> "Moderate",
              "latitude"=> 14.960201,
              "longitude"=> 120.49408,
              "recommendation"=> "Drive cautiously in parking lots, observe posted speed limits, and be mindful of pedestrians and other vehicles in crowded areas."
            ],
            [
              "dateCommitted"=> "2023-03-12",
              "reason"=> "Rollover Crash on Curvy Road",
              "severity"=> "Minor",
              "latitude"=> 15.005886,
              "longitude"=> 120.48172,
              "recommendation"=> "Reduce speed on sharp curves, avoid sudden steering maneuvers, and ensure proper vehicle maintenance, including tire condition and suspension, to prevent rollover accidents."
            ],
            [
              "dateCommitted"=> "2023-03-14",
              "reason"=> "Hydroplaning Accident",
              "severity"=> "Moderate",
              "latitude"=> 15.006549,
              "longitude"=> 120.515617,
              "recommendation"=> "Drive at reduced speeds during rainy conditions, maintain proper tire tread and inflation, and avoid sudden maneuvers on wet roads to prevent hydroplaning accidents."
            ],
            [
              "dateCommitted"=> "2023-03-17",
              "reason"=> "Sudden Lane Change Collision",
              "severity"=> "Serious",
              "latitude"=> 14.979604,
              "longitude"=> 120.536133,
              "recommendation"=> "Always use turn signals to indicate lane changes, check blind spots, and be cautious of other drivers when merging or changing lanes, maintaining a safe distance."
            ],
            [
              "dateCommitted"=> "2023-03-23",
              "reason"=> "Head On Collision",
              "severity"=> "Fatal",
              "latitude"=> 14.954645,
              "longitude"=> 120.494591,
              "recommendation"=> "Always stay in your lane and avoid overtaking in no-passing zones, maintain a safe following distance, and adhere to traffic signs and signals."
            ],
            [
              "dateCommitted"=> "2023-03-26",
              "reason"=> "Wrong Way Driving on Highway",
              "severity"=> "Moderate",
              "latitude"=> 14.979687,
              "longitude"=> 120.535965,
              "recommendation"=> "Pay close attention to road signs, especially those indicating one-way streets or highway entrances, and refrain from driving under the influence of alcohol or drugs to prevent wrong-way accidents."
            ],
            [
              "dateCommitted"=> "2023-03-28",
              "reason"=> "Cyclist Hit by Turning Vehicle",
              "severity"=> "Minor",
              "latitude"=> 14.974215,
              "longitude"=> 120.527725,
              "recommendation"=> "Always check your blind spots before turning, yield to cyclists and pedestrians, and signal your intentions clearly to other road users."
            ],
            [
              "dateCommitted"=> "2023-04-19",
              "reason"=> "Tricycle Overturns on a Rural Road Due to Excessive Speed",
              "severity"=> "Minor",
              "latitude"=> 14.951411,
              "longitude"=> 120.492966,
              "recommendation"=> "Tricycle drivers should observe speed limits and drive at a safe speed, especially on rural roads. Passengers should also encourage responsible driving behavior. Overloading tricycles with passengers or goods can also contribute to accidents, so adhere to weight limits."
            ],
            [
              "dateCommitted"=> "2023-04-20",
              "reason"=> "Intersection Collision between a Turning Vehicle and a Cyclist",
              "severity"=> "Serious",
              "latitude"=> 15.012353,
              "longitude"=> 120.515793,
              "recommendation"=> "Both drivers and cyclists should exercise caution at intersections. Drivers must check their blind spots and use their turn signals well in advance of turning. Cyclists should use hand signals to indicate their intentions and make eye contact with drivers to ensure theyre seen. Always be mindful of each others presence when sharing the road."
            ],
            [
              "dateCommitted"=> "2023-04-20",
              "reason"=> "Rear End Collision",
              "severity"=> "Serious",
              "latitude"=> 14.957299,
              "longitude"=> 120.494423,
              "recommendation"=> "Maintain a safe following distance from the vehicle ahead and be attentive to sudden stops, brake early and gradually when necessary."
            ],
            [
              "dateCommitted"=> "2023-04-21",
              "reason"=> "Rear End Collision",
              "severity"=> "Serious",
              "latitude"=> 14.990134,
              "longitude"=> 120.510597,
              "recommendation"=> "Maintain a safe following distance from the vehicle ahead and be attentive to sudden stops, brake early and gradually when necessary."
            ],
            [
              "dateCommitted"=> "2023-04-21",
              "reason"=> "Intersection Collision between a Turning Vehicle and a Cyclist",
              "severity"=> "Serious",
              "latitude"=> 14.958294,
              "longitude"=> 120.494164,
              "recommendation"=> "Both drivers and cyclists should exercise caution at intersections. Drivers must check their blind spots and use their turn signals well in advance of turning. Cyclists should use hand signals to indicate their intentions and make eye contact with drivers to ensure theyre seen. Always be mindful of each others presence when sharing the road."
            ],
            [
              "dateCommitted"=> "2023-04-21",
              "reason"=> "Wrong Way Driving on Highway",
              "severity"=> "Moderate",
              "latitude"=> 14.958294,
              "longitude"=> 120.494164,
              "recommendation"=> "Pay close attention to road signs, especially those indicating one-way streets or highway entrances, and refrain from driving under the influence of alcohol or drugs to prevent wrong-way accidents."
            ],
            [
              "dateCommitted"=> "2023-04-22",
              "reason"=> "Biker Skids on Wet Leaves and Falls on a Rainy Day",
              "severity"=> "Fatal",
              "latitude"=> 14.978112,
              "longitude"=> 120.503265,
              "recommendation"=> "During wet and rainy conditions, be cautious when riding over surfaces covered in leaves or other debris. Leaves can become slippery, reducing traction. Slow down and avoid sudden maneuvers. Also, ensure your bikes tires have sufficient tread for improved grip on wet roads."
            ],
            [
              "dateCommitted"=> "2023-04-22",
              "reason"=> "Intersection Collision between a Turning Vehicle and a Cyclist",
              "severity"=> "Serious",
              "latitude"=> 14.978112,
              "longitude"=> 120.503265,
              "recommendation"=> "Both drivers and cyclists should exercise caution at intersections. Drivers must check their blind spots and use their turn signals well in advance of turning. Cyclists should use hand signals to indicate their intentions and make eye contact with drivers to ensure theyre seen. Always be mindful of each others presence when sharing the road."
            ],
            [
              "dateCommitted"=> "2023-05-01",
              "reason"=> "Rear End Collision",
              "severity"=> "Serious",
              "latitude"=> 14.980765,
              "longitude"=> 120.516312,
              "recommendation"=> "Maintain a safe following distance from the vehicle ahead and be attentive to sudden stops, brake early and gradually when necessary."
            ]
        ]; 

        foreach($data as $d) {
            Report::create([
                'user_id' => 1,
                'status' => 'Done',
                'descriptions' => $d['reason'],
                'recommendation' => $d['recommendation'],
                'lat' => $d['latitude'],
                'lng' => $d['longitude'], 
                'type' => $d['severity'],
                'created_at' => now()->parse($d['dateCommitted']), 
            ]);

        }
        
        $reportType = [
            'Fatal',
            'Minor',
            'Serious',
            'Moderate',
        ];

        foreach($reportType as $r) {
            ReportType::create([
                'type' => $r
            ]);
        }

        User::create([
            'email' => 'super@admin.com',
            'password' => bcrypt('password'),
            'type' => User::TYPE_ADMIN, 
            'name' => 'Administrator', 
        ]); 
    }
}
