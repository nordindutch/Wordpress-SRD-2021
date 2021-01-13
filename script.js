var height;
var headers = [];
window.mobileCheck = function() {
    let check = false;
    (function(a) { if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true; })(navigator.userAgent || navigator.vendor || window.opera);
    return check;
};

function paddingX() {
    height = document.getElementsByClassName("custom-logo")[0].clientHeight;
    if ($('.content-container').length != 0) {

        if ($('.content-container')[0].style.paddingTop === "calc(-5rem + 4vh + " + height + "px)") {

        }
    }
    if ($('.content-container').length != 0 && window.mobileCheck() === false) {
        $('.content-container')[0].style.paddingTop = "calc(-5rem +  4vh + " + height + "px)";

    }
    setTimeout(paddingX, 1000);


}

function isScrolledIntoView(el) {
    var rect = el.getBoundingClientRect();
    var elemTop = rect.top;
    var elemBottom = rect.bottom;

    // Only completely visible elements return true:
    var isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight);
    // Partially visible elements return true:
    //isVisible = elemTop < window.innerHeight && elemBottom >= 0;
    return isVisible;
}

var prevHeader = document.getElementsByTagName('h1')[0];
var currHeader = document.getElementsByTagName('h1')[0];

function mostRecent() {
    headers = [];
    if (document.getElementsByTagName('h1')[0] != undefined) {
        for (i = 0; i < document.getElementsByTagName('h1').length; i++) {
            headers.push(document.getElementsByTagName('h1')[i])
        }
    }
    if (document.getElementsByTagName('h3')[0] != undefined) {
        for (i = 0; i < document.getElementsByTagName('h3').length; i++) {
            headers.push(document.getElementsByTagName('h3')[i])
        }
    }
    if (document.getElementsByTagName('h2')[0] != undefined) {
        for (i = 0; i < document.getElementsByTagName('h2').length; i++) {
            headers.push(document.getElementsByTagName('h2')[i])
        }
    }
    var index = headers.length - 1;
    while (index >= 0) {
        var element = headers[index].getBoundingClientRect();
        if (element.top > 10) {
            headers.splice(index, 1);
        }
        index -= 1;
    }
    headers.sort(function(a, b) { return b.getBoundingClientRect().top - a.getBoundingClientRect().top });
    if (headers[0] != undefined) {
        document.getElementById('current-header').textContent = headers[0].textContent;
    } else {
        document.getElementById('current-header').textContent = document.getElementsByTagName('h1')[0].textContent;
    }
}

function pageSetup() {
    paddingX();
    if (document.getElementsByTagName('body')[0].offsetHeight > window.innerHeight) {
        document.getElementById('tracker').style.display = "flex";
        mostRecent()
    }

}

function jump() {
    $('html, body').animate({ scrollTop: 0 }, 'fast');
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
var json;

function hexMap(mapName, hexArray) {
    this.name = mapName;
    this.hexes = hexArray;
}


function hexName(theme, terrain, ancestry, prev) {


    function constructName() {
        var template;

        function chooseTemplate(a) {
            let pot = json.nametemplates[rand(json.nametemplates.length)];
            let match = false
            for (x = 0; x < pot.locations.length; x++) {

                if (pot.locations[x] == a.name) {
                    match = true;
                    break
                }
            }
            if (match) {
                return pot.template
            }
        }
        let location = terrain;

        while (template == undefined) {
            template = chooseTemplate(location);
        }

        let adj1 = rand(2);
        let adj2;
        if (template.includes("*name*")) {
            template = template.replace("*name*", function() {
                if (Array.isArray(ancestry)) {
                    return ancestry[rand(ancestry.length)];
                } else {
                    let gender = randomProperty(ancestry);
                    return gender[rand(gender.length)];
                }
            })
        }
        if (template.includes("*adj1*")) {
            if (adj1 === 1) {
                template = template.replace("*adj1*", function() {
                    adj1 = theme.adjectives[rand(theme.adjectives.length)];
                    return adj1;
                })
            } else {
                template = template.replace("*adj1*", function() {
                    adj1 = location.descriptors[rand(location.descriptors.length)]
                    return adj1;
                })
            }
        }
        if (template.includes("*adj2*")) {

            template = template.replace("*adj2*", function() {
                adj2 = theme.adjectives[rand(theme.adjectives.length)];
                while (adj1 === adj2) {
                    adj2 = theme.adjectives[rand(theme.adjectives.length)];
                }
                return theme.adjectives[rand(theme.adjectives.length)];
            })
        }
        if (template.includes("*loc*")) {
            template = template.replace("*loc*", function() {
                return location.synonyms[rand(location.synonyms.length)];
            })
        }
        if (template.includes("*concept*")) {
            template = template.replace("*concept*", function() {
                return json.concepts[rand(json.concepts.length)]
            })
        }
        if (template.includes("*suf*")) {
            template = template.replace("*suf*", function() {
                return json.suffix[rand(json.suffix.length)]
            })
        }
        template = template.toLowerCase();
        for (x = 0; x < prev.hexes.length; x++) {

            if (prev.hexes[x].name === template) {
                return "---";
            }
        }
        return template;
    }

    let name = "---";
    while (name === "---") {
        name = constructName();
    }
    return name;
}

function HexTile(id, theme, ancestry, prev) {
    this.hexID = id;
    this.theme = theme;
    this.ancestry = ancestry.name;
    this.terrain = json.locations[randomProperty(theme.locations)];
    this.name = hexName(this.theme, this.terrain, ancestry.names, prev);

}
var randomProperty = function(obj) {
    var keys = Object.keys(obj);
    return obj[keys[keys.length * Math.random() << 0]];
};
var json;

function rand(a) {
    return Math.round(Math.random() * (a - 1));
}
jQuery(document).ready(function($) {
    $('.expand').on('click', expand)
    $('.expand').on('click', setMenu)
        //Cookies for Menu
    function expand() {
        var theClass = $(this).hasClass('world-articles');

        if (theClass) {
            if (getCookie('menuToggleA') == "true") {
                document.cookie = "menuToggleA=false;path=/";
            } else {
                document.cookie = "menuToggleA=true;path=/";
            }
        } else {
            if (getCookie('menuToggleB') == "true") {
                document.cookie = "menuToggleB=false;path=/";
            } else {
                document.cookie = "menuToggleB=true;path=/";
            }
        }
        setMenu()
    }


    function setMenu() {
        var theClass = $(this).hasClass('world-articles');
        var modeCookie;
        if (theClass) {
            modeCookie = (getCookie('menuToggleA') === "true");
        } else {
            modeCookie = (getCookie('menuToggleB') === "true");
        }
        if (modeCookie !== true) {
            $(this).addClass("rules");
            $(this).next().removeClass('showTab')
        } else {
            $(this).removeClass("rules");
            $(this).next().addClass('showTab')
        }

    }

    function cookieMenu() {
        if (getCookie('menuToggleA') == "true") {
            $('.world-articles').removeClass("rules");
            $('.world-articles').next().addClass('showTab');
        } else if (getCookie('menuToggleA') == "false") {
            $('.world-articles').addClass("rules");
            $('.world-articles').next().removeClass('showTab');
        }
        if (getCookie('menuToggleB') == "true") {
            $('.rules-tab').removeClass("rules");
            $('.rules-tab').next().addClass('showTab');
        } else if (getCookie('menuToggleB') == "false") {
            $('.rules-tab').addClass("rules");
            $('.rules-tab').next().removeClass('showTab');
        }
    }
    cookieMenu();
    pageSetup();
    document.addEventListener("scroll", mostRecent);
    $.getJSON('https://frontier.kompaspress.com/wp-content/themes/srd/json/generator-input.json', function(data) {
        json = data;
        const localHex = new hexMap("Generic Name", []);
        let a = 0;

        function generatorHexNames() {
            let theme = randomProperty(data.themes);
            let ancestry = function() {
                return randomProperty(data.ancestries);

            }
            localHex.hexes.push(new HexTile(a, theme, ancestry(), localHex));
            a++;
        }
        $('.hex-box').each(function() {
            $(this).attr('id', a);
            generatorHexNames()
        })
        let i = 0;
        populateLoop();

        function populateLoop() {
            setTimeout(function() {

                if (i < localHex.hexes.length) {
                    $('#' + i).addClass("biome-" + localHex.hexes[i].terrain.name);
                    $('#' + i).find('.pillar-contrast').html('<h3>' + localHex.hexes[i].name + '</h3>');
                    $('#' + i).css("display", "flex");
                    setTimeout(function() { $('#' + (i - 1)).css("pointer-events", "all") }, 125)
                    populateLoop();
                }
                i++
            }, 125)
        }
        $('.hex-box').on('click', function() {
            $(this).toggleClass('active-hex');
        })

    });


});