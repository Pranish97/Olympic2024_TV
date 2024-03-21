<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Link;
use App\Models\Schedule;
use App\Models\News;

class AdminController extends Controller
{
    public function manageCountry()
    {
        $countries = Country::all();
        return view('admin.manageCountry', compact('countries'));
    }

    public function country()
    {
        return view('admin.addCountry');
    }

    public function addCountry(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'description' => 'required|string|max:255',
            'total_medal' => 'required|string|max:255',
            'gold_medal' => 'required|string|max:255',
            'silver_medal' => 'required|string|max:255',
            'bronze_medal' => 'required|string|max:255',

        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images/countries'), $imageName);

        Country::create([
            'name' => $request->name,
            'image' => $imageName,
            'description' => $request->description,
            'total_medal' => $request->total_medal,
            'gold_medal' => $request->gold_medal,
            'silver_medal' => $request->silver_medal,
            'bronze_medal' => $request->bronze_medal,
        ]);

        return redirect()->route('manage.countries')->with('success', 'Country added successfully!');
    }

    public function editCountry($id)
    {
        $country = Country::find($id);
        return view('admin.editCountry', compact('country'));
    }

    public function updateCountry(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'description' => 'required|string|max:255',
            'total_medal' => 'required|string|max:255',
            'gold_medal' => 'required|string|max:255',
            'silver_medal' => 'required|string|max:255',
            'bronze_medal' => 'required|string|max:255',
        ]);

        $country = Country::find($id);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/countries'), $imageName);
            $country->image = $imageName;
        }

        $country->name = $request->name;
        $country->description = $request->description;
        $country->total_medal = $request->total_medal;
        $country->gold_medal = $request->gold_medal;
        $country->silver_medal = $request->silver_medal;
        $country->bronze_medal = $request->bronze_medal;
        $country->save();

        return redirect()->route('manage.countries')->with('success', 'Country updated successfully!');
    }

    public function deleteCountry($id)
    {
        $country = Country::find($id);
        if ($country) {
            if ($country->image) {
                $imagePath = public_path('images/countries/' . $country->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $country->delete();
            return redirect()->route('manage.countries')->with('success', 'Country deleted successfully!');
        }
        return redirect()->route('manage.countries')->with('error', 'Country not found!');
    }


    public function manageLink()
    {
        $links = Link::all();
        return view('admin.manageLink', compact('links'));
    }

    public function link()
    {
        return view('admin.addLink');
    }

    public function addLink(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'link' => 'required|url|max:255',
            'game' => 'required|string',
            'country_id' => 'required|numeric',
        ]);

        $videoId = $this->getYouTubeVideoId($request->link);

        Link::create([
            'title' => $request->title,
            'link' => $request->link,
            'video_id' => $videoId,
            'game' => $request->game,
            'country_id' => $request->country_id,
        ]);

        return redirect()->route('manage.link')->with('success', 'New Video added successfully!');
    }

    private function getYouTubeVideoId($url)
    {
        parse_str(parse_url($url, PHP_URL_QUERY), $params);
        return $params['v'] ?? null;
    }

    public function editLink($id)
    {
        $link = Link::findOrFail($id);
        return view('admin.editLink', compact('link'));
    }

    public function updateLink(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'link' => 'required|url|max:255',
            'game' => 'required|string',
            'country_id' => 'required|numeric',
        ]);

        $videoId = $this->getYouTubeVideoId($request->link);

        $link = Link::findOrFail($id);
        $link->title = $request->title;
        $link->link = $request->link;
        $link->video_id = $videoId;
        $link->game = $request->game;
        $link->country_id = $request->country_id;
        $link->save();

        return redirect()->route('manage.link')->with('success', 'Video updated successfully!');
    }

    public function deleteLink($id)
    {
        $link = Link::findOrFail($id);
        $link->delete();

        return redirect()->route('manage.link')->with('success', 'Video deleted successfully!');
    }


    public function manageSchedule()
    {
        $schedules = Schedule::all();
        return view('admin.manageSchedule', compact('schedules'));
    }


    public function schedule()
    {
        return view('admin.addSchedule');
    }

    public function addSchedule(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'teamA' => 'required|string|max:255',
            'teamB' => 'required|string|max:255',
            'teamA_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'teamB_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'stadium' => 'required|string|max:255',
            'league' => 'required|string|max:255',
            'time' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        $teamA_imageName = time() . '_teamA.' . $request->teamA_image->extension();
        $teamB_imageName = time() . '_teamB.' . $request->teamB_image->extension();

        $request->teamA_image->move(public_path('images/teams'), $teamA_imageName);
        $request->teamB_image->move(public_path('images/teams'), $teamB_imageName);

        Schedule::create([
            'title' => $request->title,
            'teamA' => $request->teamA,
            'teamB' => $request->teamB,
            'teamA_image' => $teamA_imageName,
            'teamB_image' => $teamB_imageName,
            'stadium' => $request->stadium,
            'league' => $request->league,
            'time' => $request->time,
            'date' => $request->date,
        ]);

        return redirect()->route('manage.schedule')->with('success', 'Schedule added successfully!');
    }

    public function editSchedule($id)
    {
        $schedule = Schedule::findOrFail($id);
        return view('admin.editSchedule', compact('schedule'));
    }

    public function updateSchedule(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'teamA' => 'required|string|max:255',
            'teamB' => 'required|string|max:255',
            'teamA_image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'teamB_image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'stadium' => 'required|string|max:255',
            'league' => 'required|string|max:255',
            'time' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        $schedule = Schedule::findOrFail($id);

        $data = [
            'title' => $request->title,
            'teamA' => $request->teamA,
            'teamB' => $request->teamB,
            'stadium' => $request->stadium,
            'league' => $request->league,
            'time' => $request->time,
            'date' => $request->date,
        ];

        if ($request->hasFile('teamA_image')) {
            $teamA_imageName = time() . '_teamA.' . $request->teamA_image->extension();
            $request->teamA_image->move(public_path('images/teams'), $teamA_imageName);
            $data['teamA_image'] = $teamA_imageName;
        }

        if ($request->hasFile('teamB_image')) {
            $teamB_imageName = time() . '_teamB.' . $request->teamB_image->extension();
            $request->teamB_image->move(public_path('images/teams'), $teamB_imageName);
            $data['teamB_image'] = $teamB_imageName;
        }

        $schedule->update($data);

        return redirect()->route('manage.schedule')->with('success', 'Schedule updated successfully!');
    }

    public function deleteSchedule($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();
        return redirect()->route('manage.schedule')->with('success', 'Schedule deleted successfully!');
    }

    public function manageNews()
    {
        $news = News::all();
        return view('admin.manageNews', compact('news'));
    }


    public function news()
    {
        return view('admin.addNews');
    }

    public function addNews(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'description' => 'required|string',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/news'), $imageName);


        $news = new News();
        $news->title = $validatedData['title'];
        $news->image = $imageName;
        $news->description = $validatedData['description'];
        $news->save();

        return redirect()->route('manage.news')->with('success', 'News added successfully!');
    }

    public function editNews($id)
    {
        $news = News::findOrFail($id);
        return view('admin.editNews', compact('news'));
    }

    public function updateNews(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'description' => 'required|string',
        ]);

        $news = News::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/news'), $imageName);
            $news->image = $imageName;
        }

        $news->title = $validatedData['title'];
        $news->description = $validatedData['description'];
        $news->save();

        return redirect()->route('manage.news')->with('success', 'News updated successfully!');
    }

    public function deleteNews($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect()->route('manage.news')->with('success', 'News deleted successfully!');
    }
}
