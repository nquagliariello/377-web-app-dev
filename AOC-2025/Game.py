from ursina import *

app = Ursina()

camera.orthographic = True
camera.fov = 18

background = Entity(
    model='quad',
    texture='assets/BG2',
    scale=55,
    z=10,
    y=15
)

player = Entity(
    model='quad',
    texture='assets/square',
    collider='box',
    y=-0.5
)

ground = Entity(
    model='cube',
    color=color.yellow,
    y=-1,
    origin_y=.5,
    scale=(200, 15, 1),
    collider='box'
)

diam = []
plates = []

def newObstacle(val):
    new1 = Entity(
        model='diamond',
        color=color.violet,
        y=-0.5,
        x=val,
        collider='mesh'
    )

    new2 = duplicate(
        new1,
        y=0.35,
        x=val + 1,
        scale=0.8
    )

    diam.extend((new1, new2))

    if val % 60 > 40:
        for i in range(5):
            e = Entity(
                model='cube',
                y=i - 0.5,
                x=val + 5 + i * 7,
                scale_x=3,
                collider='box',
                color=color.yellow
            )
            plates.append(e)

    invoke(newObstacle, val=val + 10, delay=1)

newObstacle(30)

def update():
    for ob in diam:
        ob.x -= 10 * time.dt

    for ob in plates:
        ob.x -= 10 * time.dt

    if not player.intersects().hit:
        player.y -= 7 * time.dt

    player.y = max(-0.5, player.y)

    hit = player.intersects()
    if hit.hit and hit.entity.color == color.violet:
        quit()

def input(key):
    if key == 'space' and player.intersects().hit:
        player.animate_y(
            player.y + 3,
            duration=0.3,
            curve=curve.out_sine
        )

        player.animate_rotation_z(
            player.rotation_z + 180,
            duration=0.5,
            curve=curve.linear
        )

        dust = Entity(
            model=Circle(),
            scale=0.3,
            color=color.smoke,
            position=player.position
        )

        dust.animate_scale(
            2,
            duration=0.3,
            curve=curve.linear
        )
        dust.fade_out(0.3)

app.run()