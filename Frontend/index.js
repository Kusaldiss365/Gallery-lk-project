var data = [
            {
                Name: "Warrior",
                Category: "Statue",
                Price:"Rs.5000",
            },
            {
                Name: "Naked Eye",
                Category: "Drawing",
                Price:"Rs.2000"
            }
            ];

const container = doucment.querySelector("#ad_container");

var ads = data.map(function(item){
    return(
        "<div>"+ "Name: " + item.Name +"</div>"
    )
});

container.innerHTML = ads.join('\n')