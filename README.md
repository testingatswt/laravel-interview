# Laravel Interview Question

The Car Solutions owns multiple workshops located at different locations with different working hours.

The company is currently building a platform for its admin staff in order to schedule booking appointments with different workshops.

Whenever a client called in to schedule for an appointment. The admin staff needs to be able to check the availability of the workshops, make recommendations and also create a new appointment.

The staff at the workshop will need to have access to the appointments on daily basis in order to prepare the required parts and tools.

## Your task

Create pages that allows the admin staff to:

#### Clients Page
1. List down all the clients
    - It has a table with following columns
        - Name
        - Phone
        - Email
        - Total Cars
        - Total Appointments
        - Action
            - View Cars
            - View Appointments


#### Cars Page
1. List down all the cars against provided client
    - It has a table with following columns
        - Title
            - {make} {model} [i.e. Honda Accord]
        - Engine Number
        - Chassis Number
        - Total Appointments
        - Action
            - View Appointments

#### Appintments Page
1. List down all the appintments against provided car and client
    - It has a table with following columns
        - Start Time
        - End Time

#### Create Appintments Page
1. It should be able to create a new appointment based on given information:
    - Car
    - Workshop
    - Start time
    - End time

